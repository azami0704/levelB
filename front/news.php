<div class="di"
				style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
				<?php
include "mq.php";
?>
				<div style="height:32px; display:block;"></div>
				<!--正中央-->
				<h3>更多最新消息顯示</h3>
				<hr>
				<?php
								$table='News';
								$direct=strtolower($table);
								$div=5;
								$all=ceil($$table->count(['sh'=>1])/$div);
								$act=$_GET['p']??2;
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
								$olStart=$start+1;
								echo "<ol start='$olStart' class='ssaa'>";
								foreach($rows as $row){
									echo "<li><div class='all ellipse'>{$row['text']}</div></li>";
								}
								echo "</ol>"
								?>
					<div id="altt"
						style="position: absolute; width: 350px; min-height: 100px; background-color: rgb(255, 255, 204); top: 50px; left: 130px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">
					</div>
					<script>
						$(".ssaa li").hover(
							function () {
								$("#altt").html("<pre>" + $(this).children(".all").html() + "</pre>")
								$("#altt").show()
							}
						)
						$(".ssaa li").mouseout(
							function () {
								$("#altt").hide()
							}
						)
					</script>
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
			</div>