<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
					<p class="t cent botli">動畫圖片管理</p>
					<form method="post"  action="./api/edit.php">
						<table width="100%">
							<tbody>
								<tr class="yel">
									<td width="60%">動畫圖片</td>
									<td width="10%">顯示</td>
									<td width="10%">刪除</td>
									<td></td>
								</tr>
								<?php
								$table=ucfirst($_GET['do']);
								$direct=$_GET['do'];
								$rows=$$table->all();
								foreach($rows as $row){
									?>
									<input type="hidden" name="id[]" value="<?=$row['id']?>">
									<tr>
									<td width="70%">
										<img src="./upload/<?=$row['img']?>" alt="" style="width:100px;">
									</td>
									<td width="10%">
										<input type="checkbox" name="sh[]" value="<?=$row['id']?>" <?=$row['sh']==1?'checked':'';?>>
									</td>
									<td width="10%">
										<input type="checkbox" name="del[]" value="<?=$row['id']?>">
									</td>
									<td>
									<input type="button"
											onclick="op('#cover','#cvr','./modal/update.php?table=<?=$table?>&id=<?=$row['id']?>')"
											value="更新動畫">
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
											value="新增動畫圖片"></td>
									<td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
									</td>
								</tr>
							</tbody>
						</table>

					</form>
				</div>