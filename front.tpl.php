		<div id="front-header">
			<div class="container">
				<div id="front-image" class="span-12 append-1">
					<?php print $front_image; ?>
				</div>
				<div id="front-text" class="span-8 append-3">
					<?php print $front_text; ?>
				</div>
				<div id="front-links" class="span-8 append-3">
					<?php print $front_links; ?>
				</div>
				<a href="http://artsandsciences.osu.edu/" id="aslink" title="Arts and Sciences homepage">&nbsp;</a>
			</div>
			<div id="front-header-tile">&nbsp;</div>
		</div>

	<div id="main-content" class="container">
		<a id="page-content"></a>
		<div>

			<div class="content"><?php if($quickSites_layout == 'a'){ ?><div><?php } ?>
				<?php if($messages){ ?>
					<div id="message"><?php print $messages; ?></div>
				<?php } ?>
				<div id="front-content" class="span-11">
					<?php print $before_content ?>
					<?php print $after_content ?>
				</div>
				<?php if($quickSites_layout == 'a' || $quickSites_layout == 'b'){ ?>
				<div id="features">
					<div id="front_block1" class="feature span-6">
						<div class="content">
							<?php print $front_block1; ?>
						</div>
					</div>
					<div id="front_block2" class="feature span-6">
						<div class="content">
							<?php print $front_block2; ?>
						</div>
					</div>
					<div id="front_block3" class="feature span-12 last">
						<div class="content">
							<?php print $front_block3; ?>
						</div>
					</div>
				</div>
				<?php } ?>
			</div><?php if($quickSites_layout == 'a'){ ?></div><?php } ?>

		</div><!-- #leftcontent-nostyle -->

	</div>