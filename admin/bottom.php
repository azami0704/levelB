<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
					<p class="t cent botli">進佔總人數管理</p>
					<form method="post"  action="./api/add.php">
						<table width="100%">
							<?php
								$table='Bottom';
								$direct=strtolower($table);
								$row=$$table->find(1);
								?>
							<tbody>
								<tr class="yel">
									<td width="50%">進佔總人數</td>
									<td width="50%">
										<input type="hidden" name="id" value="<?=$row['id']?>">
										<input type="text" name="text" value="<?=$row['text']?>">
									</td>
								</tr>
							</tbody>
						</table>
						<table style="margin-top:40px; width:70%;">
							<tbody>
								<tr>
									<input type="hidden" name="table" value="<?=$table?>">
									<td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
									</td>
								</tr>
							</tbody>
						</table>

					</form>
				</div>