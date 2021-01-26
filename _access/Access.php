<?php
function login_success(){
	if ( $googleEventTracking == 1 ) {
		$gaParser = new universalAnalyticsCookie;
		$gaCID = $gaParser->getCid();

		if ( $gaCID == NULL ) {
			$gaCID = $gaParser->set();
		} else {}

		//$debugMSG = "http://www.google-analytics.com/collect?v=1&tid=$gaAccount&cid=$gaCID&t=event&ec=connect&ea=registered<br/><br/>$gaUA";
		//mail("chris@thewalshgroup.ca","g measure debug", $debugMSG);

		$eventTrack = curl_init();
		curl_setopt_array( $eventTrack, array(
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_URL => "http://www.google-analytics.com/collect?v=1&tid=$gaAccount&cid=$gaCID&t=event&ec=portal&ea=login",
			CURLOPT_USERAGENT => "$gaUA",
		) );
		$resp = curl_exec( $eventTrack );
		curl_close( $eventTrack );
	}
}
?>


<div class="videoLogo">
	<a href="/"><img src="images/IvyLogo.png" class="logo" /></a>
    <div class="logoText2">
    	a fresh approach<br/>
        to downtown living
    </div>
    <div class="soldOutText">
    	sold out
    </div>
</div>

<section class="SectionsContainer">
	<div class="container">
		<div class="col-xs-0 col-md-3">
		</div>
		<div class="col-md-9">
			<?php
			$accessKey = $_SESSION[ 'sess_ap' ];

			switch ( $accessKey ) {
				case "3356eb51dccf899d97f0dc8270dac6c340a3b11b":
					?>
			<h1 class="Header">portal access</h1>
			<p>click to download</p>
			<?php
			break;

			case "3356eb51dccf899d97f0dc8270dac6c340a3b11b":
				?>
			<h1 class="Header">portal access</h1>
			<p>click to download</p>
			<?php
			break;
					
			case "3bd5331cf6830e3eba32dfaa2f95c14f796556da":
				?>
			<h1 class="Header">portal access</h1>
			<?php /*<p>click to download</p>*/?>
			<?php
			break;

			default:
			if ( isset( $_GET[ 'logout' ] ) ) {
				?>
			<h1 class="Header">thank you for visiting</h1>
			<?php
			} else {
				?>
			<h1 class="Header">portal access</h1>
			<?php
			}
			break;
			}
			?>




			<?php
			switch ( $accessKey ) {
				case "3356eb51dccf899d97f0dc8270dac6c340a3b11b":
					login_success();
					?>


			<div class="accessFiles multi-columns-row">

				<?php /*<div class="col-xs-8 col-sm-3 col-md-3 col-lg-3 shop-block">
					<div class="shop-item">
						<a href="pdf/IvyPresentation.pdf" target="_blank"><img src="_access/images/ivy_PresentationImage.png" alt=""><br/>ivy : presentation pdf</a>
					</div>
				</div>*/?>
				<!-- col-sm-2 -->
                
                <div class="col-xs-8 col-sm-3 col-md-3 col-lg-3 shop-block">
					<div class="shop-item">
						<a href="pdf/ivyHandoutPackage.pdf" target="_blank"><img src="_access/images/ivy_brokerDownloadImage1.png" alt=""><br/>ivy : handout package</a>
					</div>
				</div>
				<!-- col-sm-2 -->
                
                <div class="col-xs-8 col-sm-3 col-md-3 col-lg-3 shop-block">
					<div class="shop-item">
						<a href="_access/download?document=1" target="_blank"><img src="_access/images/ivy_buildingRendering.png" alt=""><br/>ivy : building rendering</a>
					</div>
				</div>
				<!-- col-sm-2 -->

				<div class="col-xs-8 col-sm-3 col-md-3 col-lg-3 shop-block">
					<div class="shop-item">
						<a href="_access/download?document=2" target="_blank" class="large"><img src="_access/images/ivy_lobbyExterior.png" alt=""><br/>ivy : lobby exterior</a>
                        <a href="_access/download?document=2" target="_blank" class="small"><img src="_access/images/ivy_LobbyExteriorBtn.jpg" alt=""><br/>ivy : lobby exterior</a>
					</div>
				</div>
				<!-- col-sm-2 -->

				<div class="col-xs-8 col-sm-3 col-md-3 col-lg-3 shop-block">
					<div class="shop-item">
						<a href="_access/download?document=3" target="_blank" class="large"><img src="_access/images/ivy_balconySW.png" alt=""><br/>ivy : balcony rendering</a>
                        <a href="_access/download?document=3" target="_blank" class="small"><img src="_access/images/IVYbalconyBtn.jpg" alt=""><br/>ivy : balcony rendering</a>
					</div>
				</div>
				<!-- col-sm-2 -->
                
                <div class="col-xs-8 col-sm-3 col-md-3 col-lg-3 shop-block">
					<div class="shop-item">
						<a href="_access/download?document=13" target="_blank" class="large"><img src="_access/images/ivy_lobby.png" alt=""><br/>ivy : lobby rendering</a>
                        <a href="_access/download?document=13" target="_blank" class="small"><img src="_access/images/IVYlobbyBtn.jpg" alt=""><br/>ivy : lobby rendering</a>
					</div>
				</div>
				<!-- col-sm-2 -->

				<div class="col-xs-8 col-sm-3 col-md-3 col-lg-3 shop-block">
					<div class="shop-item">
						<a href="_access/download?document=4" target="_blank" class="large"><img src="_access/images/ivy_lookingSW.png" alt=""><br/>ivy : looking southwest</a>
                        <a href="_access/download?document=4" target="_blank" class="small"><img src="_access/images/ivyLookingSWbtn.jpg" alt=""><br/>ivy : looking southwest</a>
					</div>
				</div>
				<!-- col-sm-2 -->

				<div class="col-xs-8 col-sm-3 col-md-3 col-lg-3 shop-block">
					<div class="shop-item">
						<a href="_access/download?document=5" target="_blank" class="large"><img src="_access/images/ivy_lookingSWzoomed.png" alt=""><br/>ivy : looking southwest<br/>(zoomed)</a>
                        <a href="_access/download?document=5" target="_blank" class="small"><img src="_access/images/ivyLookingSWzoomedBtn.jpg" alt=""><br/>ivy : looking southwest<br/>(zoomed)</a>
                        
					</div>
				</div>
				<!-- col-sm-2 -->
				
				<?php /*<div class="col-xs-8 col-sm-3 col-md-3 col-lg-3 shop-block">
					<div class="shop-item">
						<a href="_access/download?document=12" target="_blank"><img src="_access/images/ivy_neighbourhood2016-12-01.png" alt=""><br/>ivy : neighbourhood</a>
					</div>
				</div>
				<!-- col-sm-2 -->

				<div class="col-xs-8 col-sm-3 col-md-3 col-lg-3 shop-block">
					<div class="shop-item">
						<a href="_access/download?document=10" target="_blank" class="large"><img src="_access/images/ivy_logo.png" alt=""><br/>ivy : logo</a>
                        <a href="_access/download?document=10" target="_blank" class="small"><img src="_access/images/ivy_logoBtn.jpg" alt=""><br/>ivy : logo</a>
					</div>
				</div>
				<!-- col-sm-2 -->

				<div class="col-xs-8 col-sm-3 col-md-3 col-lg-3 shop-block">
					<div class="shop-item">
						<a href="_access/download?document=11" target="_blank" class="large"><img src="_access/images/ivy_teamLogo.png" alt=""><br/>ivy : team logo</a>
                        <a href="_access/download?document=11" target="_blank" class="small"><img src="_access/images/ivy_teamLogoBtn.jpg" alt=""><br/>ivy : team logo</a>
					</div>
				</div>
				<!-- col-sm-2 -->

				<div class="col-xs-8 col-sm-3 col-md-3 col-lg-3 shop-block">
					<div class="shop-item">
						<a href="_access/download?document=6" target="_blank"><img src="_access/images/ivy_lineRenderingNW.png" alt=""><br/>ivy : line rendering NW</a>
					</div>
				</div>
				<!-- col-sm-2 -->

				<div class="col-xs-8 col-sm-3 col-md-3 col-lg-3 shop-block">
					<div class="shop-item">
						<a href="_access/download?document=7" target="_blank"><img src="_access/images/ivy_lineRenderingNE.png" alt=""><br/>ivy : line rendering NE</a>
					</div>
				</div>
				<!-- col-sm-2 -->

				<div class="col-xs-8 col-sm-3 col-md-3 col-lg-3 shop-block">
					<div class="shop-item">
						<a href="_access/download?document=8" target="_blank"><img src="_access/images/ivy_lineRenderingSW.png" alt=""><br/>ivy : line rendering SW</a>
					</div>
				</div>
				<!-- col-sm-2 -->

				<div class="col-xs-8 col-sm-3 col-md-3 col-lg-3 shop-block">
					<div class="shop-item">
						<a href="_access/download?document=9" target="_blank"><img src="_access/images/ivy_lineRenderingSE.png" alt=""><br/>ivy : line rendering SE</a>
					</div>
				</div>
				<!-- col-sm-2 -->*/?>
			</div>
				<div style="clear:both;"></div>
				<div class="accessFooter">
				<div class="logout-btn"><a href="logout">logout</a></div>
				</div>
			</div>
			<?php
			break;
					
			case "3bd5331cf6830e3eba32dfaa2f95c14f796556da":
					login_success();
					?>


			<div class="accessFiles multi-columns-row">

			</div>
				<div style="clear:both;"></div>
				<div class="accessFooter">
				<div class="logout-btn"><a href="logout">logout</a></div>
				</div>
			</div>
			<?php
			break;

			default:

			if ( isset( $_GET[ 'logout' ] ) ) {
				?>
			<?php
			} else {
				?>
			<form id="access-form" method="post" action="" style="margin:0px auto;">
				<div class="formBlock">
					<div class="formElement fullrow">
						<div class="formRow fullrow input" style="margin-bottom:10px; color:#000000;">
							<label style="float: left;">username</label>
							<input type="text" name="username" id="username" class="required" minlength="2" tabindex="1" style="float: right; width: 65%;">
						</div>
						<div class="formRow fullrow input" style="color:#000000;">
							<label style="float: left;">password</label>
							<input type="password" name="password" id="password" class="required" minlength="2" tabindex="2" style="float: right; width: 65%;">
						</div>
						<div class="formRow fullrow submit" style="text-align: right; display: table; margin-top: 25px; padding-bottom:25px; padding: 0px;">
							<input type="hidden" id="PostAction" name="PostAction" value="accessForm"/><input type="submit" value="login" border="0" tabindex="3" style="margin:0px auto; margin-left: 0px; margin-top:0px;">
						</div>
					</div>
				</div>
			</form>
			<div style="clear:both;"></div>
			<?php
			}
			if ( $page == 21 ) {
				?>
			<p>You have been logged out.</p>
			<?php
			}
			?>
			<?php
			break;
			}
			?>
			<div style="clear:both;"></div>
		</div>
	</div>
</section>


<script type="text/javascript">
$(document).ready(function(){
    'use strict';
 
    var $list       = $( '.accessFiles' ),
        $items      = $list.find( '.shop-item' ),
        setHeights  = function()
        {
            $items.css( 'height', 'auto' );
 
            var perRow = Math.floor( $list.width() / $items.width() );
            if( perRow == null || perRow < 2 ) return true;
 
            for( var i = 0, j = $items.length; i < j; i += perRow )
            {
                var maxHeight   = 0,
                    $row        = $items.slice( i, i + perRow );
 
                $row.each( function()
                {
                    var itemHeight = parseInt( $( this ).outerHeight() );
                    if ( itemHeight > maxHeight ) maxHeight = itemHeight;
                });
                $row.css( 'height', maxHeight );
            }
        };
 
    setHeights();
	$( window ).on( 'load', setHeights );
    $( window ).on( 'resize', setHeights );
 
});
</script>