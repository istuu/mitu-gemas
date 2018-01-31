<?php
$this->start = request()->start;
$this->end  = request()->end;
return [
        'type' => 'listing',
        'listing' => [
                'headers' => [
                        'columns' => [
                                'create_on' => [
                                    'title' => 'Submitted At'
                                ],
                                'name',
                                'email',
                                'phone',
                                'gender',
                                // 'province.name as province' => [
                                //         'title' => 'Province',
                                //         'on' => ['prvncs.id','=','xchngcds.province_id']
                                // ],
                                // 'regencies.name as regency' => [
                                //         'title' => 'Regency',
                                //         'on' => ['rgncs.id','=','xchngcds.city_id']
                                // ],
                                'status'
                        ]
                ],
                'where' => function($q){
                        $query = $q;
                        if(isset($this->start) && $this->start !== ''){
                            $query = $query->where('create_on','>=',date('Y-m-d H:i:s',strtotime($this->start)));
                        }
                        if(isset($this->end) && $this->end !== ''){
                            $query = $query->where('create_on','<=',date('Y-m-d H:i:s',strtotime($this->end)));
                        }
                        return $query;
                },
                'data-tables' => true,
                'pagination' => null
        ],
        'actions' => [
                'export'=>[
                        'label'=>'Export',
                        'permalink'=>true,
                        'placement'=>'header',
                        'id'=>'btn-export',
                ],
                'detail'=>[
                        'icon' => 'fa-list',
                        'permalink'=>true,
                ],
                // 'delete'
        ]
];
