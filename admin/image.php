<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
					<p class="t cent botli">校園映像資料管理</p>
					<form method="post"  action="./api/edit.php">
						<table width="100%">
							<tbody>
								<tr class="yel">
									<td width="60%">校園映像資料圖片</td>
									<td width="10%">顯示</td>
									<td width="10%">刪除</td>
									<td></td>
								</tr>
								<?php
								$table='Image';
								$direct=strtolower($table);
								$div=3;
								$all=ceil($$table->count(1)/$div);
								$act=$_GET['p']??1;
								$prev=$act-1;
								$next=$act+1;
								if($act==1){
									$prev=1;
								}
								if($act==$all){
									$next==$all;
								}
								$start=($act-1)*$div;
								$rows=$$table->all(" LIMIT $start,$div");
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
											value="更新圖片">
									</td>
								</tr>
									<?php
								}
								?>
							</tbody>
						</table>
					<div style="text-align:center;">
						<a class="bl" style="font-size:30px;" href="?do=<?=$direct?>&p=<?=$prev?>">&lt;&nbsp;</a>
						<?php
						for ($i=1; $i <=$all ; $i++) { 
							$size=$i==$act?'30px':'24px';
							echo "<a class='bl' style='font-size:$size;' href='?do=$direct&p=$i'>$i</a>";
						}
						?>
						<a class="bl" style="font-size:30px;" href="?do=<?=$direct?>&p=<?=$next?>">&nbsp;&gt;</a>
					</div>
						<table style="margin-top:40px; width:70%;">
							<tbody>
								<tr>
									<input type="hidden" name="table" value="<?=$table?>">
									<td width="200px"><input type="button"
											onclick="op('#cover','#cvr','./modal/<?=$direct?>.php')"
											value="新增校園映像圖片"></td>
									<td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
									</td>
								</tr>
							</tbody>
						</table>

					</form>
				</div>