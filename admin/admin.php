<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
					<p class="t cent botli">管理者帳號管理</p>
					<form method="post"  action="./api/edit.php">
						<table width="100%">
							<tbody>
								<tr class="yel">
									<td width="45%">帳號</td>
									<td width="45%">密碼</td>
									<td width="10%">刪除</td>
									<td></td>
								</tr>
								<?php
								$table='Admin';
								$direct=strtolower($table);
								$rows=$$table->all();
								foreach($rows as $row){
									?>
									<input type="hidden" name="id[]" value="<?=$row['id']?>">
									<tr>
									<td width="45%">
										<input type="text" name="ac[]" value="<?=$row['ac']?>" style="width:90%">
									</td>
									<td width="45%">
										<input type="password" name="pw[]" value="<?=$row['pw']?>">
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
											value="新增管理者帳號"></td>
									<td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
									</td>
								</tr>
							</tbody>
						</table>

					</form>
				</div>