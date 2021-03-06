<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemsBuffer extends Model
{
	protected $table = 'items_buffer';

	protected $fillable = ['convert_product_id','category_part_num','mfr','part_num','part_name','part_desc','default_um','default_curr','unit_cost','sell_price','break_down_price','price_date','lead_time','price_valid_until','item_need_qc','status','created_by','modified_by'];

	public $timestamps = true;
}
