<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
					<p class="t cent botli">動態文字廣告管理</p>
					<form method="post"  action="./api/edit.php">
						<table width="100%">
							<tbody>
								<tr class="yel">
									<td width="80%">動態文字廣告</td>
									<td width="10%">顯示</td>
									<td width="10%">刪除</td>
									<td></td>
								</tr>
								<?php
								$table='Ad';
								$direct=strtolower($table);
								$rows=$$table->all();
								foreach($rows as $row){
									?>
									<input type="hidden" name="id[]" value="<?=$row['id']?>">
									<tr>
									<td width="80%">
										<input type="text" name="text[]" value="<?=$row['text']?>" style="width:90%">
									</td>
									<td width="10%">
										<input type="checkbox" name="sh[]" value="<?=$row['id']?>" <?=$row['sh']==1?'checked':'';?>>
									</td>
									<td width="10%">
										<input type="checkbox" name="del[]" value="<?=$row['id']?>">
									</td>
								</tr>
									<?php
								}
								?>
							</tbody>
						</table>
						<table style="margin-top:40px; width:70%;">
							<tbody>
								<tr>
									<input type="hidden" name="table" value="<?=$table?>">
									<td width="200px"><input type="button"
											onclick="op('#cover','#cvr','./modal/<?=$direct?>.php')"
											value="新增動態文字廣告"></td>
									<td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
									</td>
								</tr>
							</tbody>
						</table>

					</form>
				</div>