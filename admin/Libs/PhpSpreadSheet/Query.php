<?php 
	require_once "Data.php";

	class Query extends Data{
		public function Chuoi($param)
		{
			$sql=$this->con->prepare($param);
			$sql->execute();
			return $sql->fetchAll(PDO::FETCH_OBJ);
		}
		
		public function Xoa($table, $condition, $forms)
		{
			# table 		table database
			# condition		array condition with value  is field of table
			# forms 		array value conditon get
			# note			value array condition = index array forms
			$query_string = '';
			$query_string .= 'DELETE FROM '.$table;
			if(!empty($condition))
			{
				$query_string .= ' WHERE';
				$arr_forms = [];
				$number = 0;
				foreach ($condition as $key => $value) 
				{
					if( isset($forms[$key]) )
					{
						$arr_forms[':'.$key] = $forms[$key];
						if($number == 0)
						{
							$query_string .= ' '.$key.$value.':'.$key;
						}
						else
						{
							$query_string .= ' AND '.$key.$value.':'.$key;
						}
					}
					$number ++;
				}
				$sql=$this->con->prepare($query_string);
				$sql->execute($arr_forms);
			}
			else
			{
				return -1;
			}
		}

		public function ThemMoi($table, $fields, $forms)
		{
			# table 		table database
			# fields 		field element in table is array string
			# forms			form submit data to table is array with index is like array fields
			# note			value array fields = index array forms
			# result 		number:Success
			# result 		0:Error input fields
			# result 		-1:Empty array fields
			$arr_fields = [];
			$arr_datas = [];
			$arr_forms = [];
			if(!empty($fields))
			{
				foreach ($fields as $key => $value) 
				{
					array_push($arr_fields, $value);
					array_push($arr_datas, ":".$value);
					if(isset($forms[$value]))
					{
						$arr_forms[$value] = $forms[$value];
					}
					else
					{
						$arr_forms[$value] = NULL;
					}
				}
				$str_fields = implode(",", $arr_fields);
				$str_datas = implode(",", $arr_datas);
				$query_string = 'INSERT INTO '.$table.' ('.$str_fields.') VALUES ('.$str_datas.')';
				$sql = $this->con->prepare($query_string);
				$sql->execute($arr_forms);
				return $this->con->lastInsertId();
			}
			else
			{
				return -1;
			}
		}

		public function CapNhat($table, $fields, $condition, $forms)
		{
			# table 		table database
			# fields		field of table is array
			# condition     field of table and not of array fields
			# forms 		is array of field two array fields and array conditon
			$query_string = '';
			$query_string .= 'UPDATE '.$table.' SET ';
			$arr_forms = [];
			if(!empty($fields))
			{
				$arr_update = [];
				foreach ($fields as $key => $value) 
				{
					#if( isset($forms[$value]) )
					if(array_key_exists($value, $forms))
					{
						$arr_forms[':'.$value] = $forms[$value];
						array_push($arr_update, $value.'=:'.$value);
					}
				}
				$str_update = implode(",", $arr_update);
				$query_string .= $str_update;
			}
			if(!empty($condition))
			{
				$query_string .= ' WHERE';
				foreach ($condition as $key_condition => $value_condition) 
				{
					if($key_condition == 0)
					{
						$query_string .= ' '.$value_condition.'=:'.$value_condition;
					}
					else
					{
						$query_string .= ' AND '.$value_condition.'=:'.$value_condition;
					}
				}
			}
			$sql=$this->con->prepare($query_string);
			$sql->execute($forms);
		}

		public function DanhSach($table, $fields=[], $condition=[], $sorts=[], $limits=[], $forms=[])
		{
			# table 		table database
			# fields		value get from table. It is array empty or field of table
			# condition		array condition with value is field of table
			# $sorts 		fields in table sort ASC or DESC
			# $limits 		It has one number 5 or string 4,5
			# $forms 		index of forms like index of condition
			$query_string = '';
			$arr_forms = [];
			if(!empty($fields))
			{
				$str_fields = implode(",", $fields);
				$query_string .= 'SELECT '.$str_fields.' FROM '.$table;
			}
			else
			{
				$query_string .= 'SELECT * FROM '.$table;
			}
			if(!empty($condition))
			{
				$query_string .= ' WHERE';
				$number = 0;
				foreach ($condition as $key => $value) 
				{
					$arr_forms[':'.$key] = $forms[$key];
					if($number == 0)
					{
						$query_string .= ' '.$key." ".$value.' :'.$key;
					}
					else
					{
						$query_string .= ' AND '.$key." ".$value.' :'.$key;
					}
					$number ++;
				}
			}
			if(!empty($sorts))
			{
				$arr_sorts = [];
				$query_string .= ' ORDER BY ';
				foreach ($sorts as $key_sort => $value_sort) 
				{
					array_push($arr_sorts, $key_sort." ".$value_sort);
				}
				$str_sorts = implode(",", $arr_sorts);
				$query_string .= $str_sorts;
			}
			if(!empty($limits))
			{
				$query_string .= ' LIMIT ';
				$str_limit = implode(",", $limits);
				$query_string .= $str_limit;
			}
			$sql=$this->con->prepare($query_string);
			$sql->execute($arr_forms);
			return $sql->fetchAll(PDO::FETCH_OBJ);
		}

		public function ChiTiet($table, $fields, $condition, $forms)
		{
			# table 		table database
			# fields		value get from table. It is array empty or field of table
			# condition		array condition with value is field of table
			# forms 		array value conditon get
			# note			value array condition = index array forms
			$query_string = '';
			if(!empty($fields))
			{
				$str_fields = implode(",", $fields);
				$query_string .= 'SELECT '.$str_fields.' FROM '.$table;
			}
			else
			{
				$query_string .= 'SELECT * FROM '.$table;
			}
			if(!empty($condition))
			{
				$query_string .= ' WHERE';
				$arr_forms = [];
				$number = 0;
				foreach ($condition as $key => $value) 
				{
					$arr_forms[':'.$key] = $forms[$key];
					if($number == 0)
					{
						$query_string .= ' '.$key.$value.':'.$key;
					}
					else
					{
						$query_string .= ' AND '.$key.$value.':'.$key;
					}
					$number ++;
				}
			}
			$sql = $this->con->prepare($query_string);
			$sql->execute($arr_forms);
			return $sql->fetch(PDO::FETCH_OBJ);
		}
	}
?>