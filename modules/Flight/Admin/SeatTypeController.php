<?php


    namespace Modules\Flight\Admin;


    use Auth;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Validator;
    use Illuminate\Validation\Rule;
    use Modules\AdminController;
    use Modules\Flight\Models\Flight;
    use Modules\Flight\Models\SeatType;

    class SeatTypeController extends AdminController
    {
        /**
         * @var string
         */
        private $seatType;

        public function __construct()
        {
            parent::__construct();
            $this->setActiveMenu(route('flight.admin.index'));
            $this->seatType = SeatType::class;
        }

        public function callAction($method, $parameters)
        {
            if(!Flight::isEnable())
            {
                return redirect('/');
            }
            return parent::callAction($method, $parameters); // TODO: Change the autogenerated stub
        }

        public function index(Request $request)
        {
            $this->checkPermission('flight_view');
            $query = $this->seatType::query() ;
            $query->orderBy('id', 'desc');

            if (!empty($flight_name = $request->input('s'))) {
                $query->where('code', 'LIKE', '%' . $flight_name . '%');
            }
            if ($this->hasPermission('flight_manage_others')) {
                if (!empty($author = $request->input('vendor_id'))) {
                    $query->where('create_user', $author);
                }
            } else {
                $query->where('create_user', Auth::id());
            }
            $data = [
                'rows'               => $query->with(['author'])->paginate(20),
                'flight_manage_others' => $this->hasPermission('flight_manage_others'),
                'breadcrumbs'        => [
                    [
                        'name' => __('Seat Type'),
                        'url'  => route('flight.admin.index')
                    ],
                    [
                        'name'  => __('All'),
                        'class' => 'active'
                    ],
                ],
                'page_title'=>__("Seat Type Management")
            ];
            return view('Flight::admin.seatType.index', $data);
        }
        public function edit(Request $request, $id)
        {
            $this->checkPermission('flight_update');
            $row = $this->seatType::find($id);
            if (empty($row)) {
                return redirect(route('flight.admin.seat_type.index'));
            }
            if (!$this->hasPermission('flight_manage_others')) {
                if ($row->create_user != Auth::id()) {
                    return redirect(route('flight.admin.index'));
                }
            }
            $data = [
                'row'            => $row,
                'breadcrumbs'    => [
                    [
                        'name' => __('Seat type'),
                        'url'  => route('flight.admin.seat_type.index')
                    ],
                    [
                        'name'  => __('Edit seat type'),
                        'class' => 'active'
                    ],
                ],
                'page_title'=>__("Edit: :name",['name'=>$row->code])
            ];
            return view('Flight::admin.seatType.detail', $data);
        }

        public function store( Request $request, $id ){

            if($id>0){
                $this->checkPermission('flight_update');
                $row = $this->seatType::find($id);
                if (empty($row)) {
                    return redirect(route('flight.admin.seat_type.index'));
                }

                if($row->create_user != Auth::id() and !$this->hasPermission('flight_manage_others'))
                {
                    return redirect(route('flight.admin.seat_type.index'));
                }
            }else{
                $this->checkPermission('flight_create');
                $row = new $this->seatType();
            }
            $validator = Validator::make($request->all(), [
                'name'=>'required',
                'code'=>[
                    'required',
                    Rule::unique(SeatType::getTableName())->ignore($row),
                ]
            ]);
            if ($validator->fails()) {
                return redirect()->back()->with(['errors' => $validator->errors()]);
            }
            $dataKeys = [
                'code',
                'name'
            ];
            if($this->hasPermission('flight_manage_others')){
                $dataKeys[] = 'create_user';
            }
            $row->fillByAttr($dataKeys,$request->input());
            $res = $row->save();
            if ($res) {
                return redirect(route('flight.admin.seat_type.edit',$row))->with('success', __('Seat type saved') );
            }
        }


        public function bulkEdit(Request $request)
        {

            $ids = $request->input('ids');
            $action = $request->input('action');
            if (empty($ids) or !is_array($ids)) {
                return redirect()->back()->with('error', __('No items selected!'));
            }
            if (empty($action)) {
                return redirect()->back()->with('error', __('Please select an action!'));
            }

            switch ($action){
                case "delete":
                    foreach ($ids as $id) {
                        $query = $this->seatType::where("id", $id);
                        if (!$this->hasPermission('flight_manage_others')) {
                            $query->where("create_user", Auth::id());
                            $this->checkPermission('flight_delete');
                        }
                        $row  =  $query->first();
                        if(!empty($row)){
                            $row->delete();
                        }
                    }
                    return redirect()->back()->with('success', __('Deleted success!'));
                    break;
                case "permanently_delete":
                    foreach ($ids as $id) {
                        $query = $this->seatType::where("id", $id);
                        if (!$this->hasPermission('flight_manage_others')) {
                            $query->where("create_user", Auth::id());
                            $this->checkPermission('flight_delete');
                        }
                        $row  =  $query->first();
                        if($row){
                            $row->delete();
                        }
                    }
                    return redirect()->back()->with('success', __('Permanently delete success!'));
                    break;
                case "clone":
                    $this->checkPermission('flight_create');
                    foreach ($ids as $id) {
                        (new $this->seatType())->saveCloneByID($id);
                    }
                    return redirect()->back()->with('success', __('Clone success!'));
                    break;
                default:
                    // Change status
                    foreach ($ids as $id) {
                        $query = $this->seatType::where("id", $id);
                        if (!$this->hasPermission('flight_manage_others')) {
                            $query->where("create_user", Auth::id());
                            $this->checkPermission('flight_update');
                        }
                        $row = $query->first();
                        $row->status  = $action;
                        $row->save();
                    }
                    return redirect()->back()->with('success', __('Update success!'));
                    break;
            }
            }
            public function getForSelect2(Request $request)
            {
                $pre_selected = $request->query('pre_selected');
                $selected = $request->query('selected');

                if($pre_selected && $selected){
                    $item = $this->seatType::find($selected);
                    if(empty($item)){
                        return response()->json([
                            'text'=>''
                        ]);
                    }else{
                        return response()->json([
                            'text'=>$item->name
                        ]);
                    }
                }
                $q = $request->query('q');
                $query = $this->seatType::select('code', 'name as text');
                if ($q) {
                    $query->where('name', 'like', '%' . $q . '%');
                }
                $res = $query->orderBy('code', 'desc')->limit(20)->get();
                $array = [];
                foreach ($res as $k=> $re){
                    $array[$k]['id']= $re->code;
                    $array[$k]['text']= $re->text;

                }

                return response()->json([
                    'results' => $array
                ]);
            }

    }
