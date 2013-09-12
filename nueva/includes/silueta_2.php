				<div id="silueta">
						<?php query_posts('cat=504&posts_per_page=4'); 
						$i=1;
						while (have_posts()):the_post();
						?>
					<div id="sil_izq">
						<div id="img_sil">
							<img class="img_sil_2" src="wp-content/themes/nueva/img/SIRIA_ISRAEL_76.jpg" />
							<img class="img_sil_2" src="wp-content/themes/nueva/img/SIRIA_ISRAEL_77.jpg" />
							<img class="img_sil_2" src="wp-content/themes/nueva/img/DSC02278.jpg" />
							<img class="img_sil_2" src="wp-content/themes/nueva/img/DSC02277.jpg" />
						</div>
					</div>
					<div id="sil_der">
						<div id="txt_sil">
							<div id="tit_sil_cod">
								<?php $i=1;
								while ($i <= 4):the_post();?>
								<div class="tit_sil"><a href="<?php the_permalink();?>"><?php the_title();?></a></div>
								<?php $i++; endwhile;?>
							</div>
							<div id="ext_sil_cod">
								<div class="ext_sil">11111111111111111111 de la realeza realeza realeza mantiene una [...]</div>
								<div class="ext_sil">22222222222222222222 de la realeza mantiene una [...]</div>
								<div class="ext_sil">33333333333333333333 de la realeza mantiene una [...]</div>
								<div class="ext_sil">44444444444444444444 de la reaasfa aslezasf sa a smasf asfasf asdf  antsas f iene una [...]</div>
							</div>
						</div>
						<div id="bot_sil">
								<div class="nav">
									<a id="prev2" href="#"><<<</a>&nbsp;&nbsp;&nbsp;&nbsp;
									<a id="next2" href="#">>>></a>
								</div>
						</div>
					</div>
						<?php endwhile;
						wp_reset_query();?>
				</div>
