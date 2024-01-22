<?php 
	require_once "Data.php";

	class Query extends Data{
		
		
		

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

	}
?>