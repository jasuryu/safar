#!/usr/bin/python

import mysql.connector
import telebot

TOKEN = "2117975061:AAFdtaSlQDibyLi-tyb6HIhSgPfomJXBjZo"
bot = telebot.TeleBot(TOKEN) 

#Connet to your db
HOST = "localhost"
USER = "root"
PASSWORD = ""
DATABASE = "safar_uz"


from telebot import *



def is_contact_in_db(id):
	mydb = mysql.connector.connect(
		host=HOST,
		user=USER,
		password=PASSWORD,
		database=DATABASE
		)
	isInTelegram = mydb.cursor()
	isInTelegram.execute("SELECT user_id FROM telegram")
	telegram_db = isInTelegram.fetchall()
	mydb.commit()
	
	for id_from_db in telegram_db :
		if (id_from_db[0] == id):		
			return True
	
	else:
		return False
		
def add_into_db(id,contact,language = "ru"):
	db = mysql.connector.connect(
			host=HOST,
			user=USER,
			password=PASSWORD,
			database=DATABASE
			)

	mycursor = db.cursor()

	sql = "INSERT INTO telegram (user_id, phone_number,language) VALUES (%s, %s,%s)"
	val = (id,contact,language)
	mycursor.execute(sql, val)

	db.commit()
	pass
	
def is_contact_authorized(contact):
	mydb = mysql.connector.connect(
		host=HOST,
		user=USER,
		password=PASSWORD,
		database=DATABASE
		)
	mycursor = mydb.cursor()
	mycursor.execute("SELECT phone FROM users")
	myresult = mycursor.fetchall()
	mydb.commit()
	#check from db contact
	for contact_in_db in myresult:

		# from errors
		try:
			#contact from db coverting to correct form (ex:998998457062)
			contact_in_db = contact_in_db[0]
			contact_in_db = contact_in_db.replace(' ', '')
			contact_in_db = contact_in_db.replace('+', '')
			pass
		except:
			pass

		#if in db 
		if (contact_in_db == contact):
			return True

	pass


@bot.message_handler(commands=['start'])
def start_contact(message):
	#user id
	user_id = message.chat.id

	if is_contact_in_db(user_id): 
		bot.send_message(user_id,'Welcome ' + message.chat.first_name)
		pass
	
	else:
		bot.send_message(user_id,'Welcome ' + message.chat.first_name)
		ask_contact = types.ReplyKeyboardMarkup()
		button_send_contact = types.KeyboardButton('Отправить контакт',request_contact=True)
		ask_contact.add(button_send_contact)
		bot.send_message(user_id,'Нажми на кнопку, чтобы отправить контакт', reply_markup = ask_contact)
		pass




@bot.message_handler(content_types=['contact'])
def contact_handler(message):

	#contact coverting to correct form (ex:998998457062)
	contact = str(message.contact.phone_number)
	contact = contact.replace(' ', '')
	contact = contact.replace('+', '')

	#user id
	user_id = message.chat.id

	if  is_contact_authorized(contact):
		if True:
			add_into_db(user_id,contact)
			bot.send_message(user_id,'cool')
			pass
		# except:
		# 	bot.send_message(user_id,'i know your phone number')
		# 	pass
		pass

	else:
		bot.send_message(user_id,'Go to our site first')
		pass



bot.polling()