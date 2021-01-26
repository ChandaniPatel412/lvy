<?php
session_start();
if($_SESSION['sess_ax'] == true)
{
	$sessionGate = $_SESSION['sess_ap'];
	if($sessionGate == "3356eb51dccf899d97f0dc8270dac6c340a3b11b")
	{
		
		switch(filter_var($_GET['document'], FILTER_SANITIZE_STRING))
		{
			case 1:
				$nameOld = "./assets/$sessionGate/ivy_buildingRendering.jpg";
				$nameNew = "ivy_buildingRendering.jpg" ;
				header("Content-Transfer-Encoding: binary");
				header("Content-Type: ".mime_content_type("$nameOld")."");
				header("Content-disposition: attachment; filename=$nameNew"); //
				readfile($nameOld);
			break;
			
			case 2:
				$nameOld = "./assets/$sessionGate/ivy_LobbyExterior.jpg";
				$nameNew = "ivy_LobbyExterior.jpg";
				header("Content-Transfer-Encoding: binary");
				header("Content-Type: ".mime_content_type("$nameOld")."");
				header("Content-disposition: attachment; filename=$nameNew"); //
				readfile($nameOld);
			break;
			
			case 3:
				$nameOld = "./assets/$sessionGate/ivybalconySouthwest2.jpg";
				$nameNew = "ivy_balconySW.jpg";
				header("Content-Transfer-Encoding: binary");
				header("Content-Type: ".mime_content_type("$nameOld")."");
				header("Content-disposition: attachment; filename=$nameNew"); //
				readfile($nameOld);
			break;
			
			case 4:
				$nameOld = "./assets/$sessionGate/ivy_lookingSW.jpg";
				$nameNew = "ivy_lookingSW.jpg";
				header("Content-Transfer-Encoding: binary");
				header("Content-Type: ".mime_content_type("$nameOld")."");
				header("Content-disposition: attachment; filename=$nameNew"); //
				readfile($nameOld);
			break;
			
			case 5:
				$nameOld = "./assets/$sessionGate/ivy_lookingSWzoomed.jpg";
				$nameNew = "ivy_lookingSWzoomed.jpg";
				header("Content-Transfer-Encoding: binary");
				header("Content-Type: ".mime_content_type("$nameOld")."");
				header("Content-disposition: attachment; filename=$nameNew"); //
				readfile($nameOld);
			break;
			
			case 6:
				$nameOld = "./assets/$sessionGate/ivy_lineRenderingNW.jpg";
				$nameNew = "ivy_lineRenderingNW.jpg";
				header("Content-Transfer-Encoding: binary");
				header("Content-Type: ".mime_content_type("$nameOld")."");
				header("Content-disposition: attachment; filename=$nameNew"); //
				readfile($nameOld);
			break;
			
			case 7:
				$nameOld = "./assets/$sessionGate/ivy_lineRenderingNE.jpg";
				$nameNew = "ivy_lineRenderingNE.jpg";
				header("Content-Transfer-Encoding: binary");
				header("Content-Type: ".mime_content_type("$nameOld")."");
				header("Content-disposition: attachment; filename=$nameNew"); //
				readfile($nameOld);
			break;
			
			case 8:
				$nameOld = "./assets/$sessionGate/ivy_lineRenderingSW.jpg";
				$nameNew = "ivy_lineRenderingSW.jpg";
				header("Content-Transfer-Encoding: binary");
				header("Content-Type: ".mime_content_type("$nameOld")."");
				header("Content-disposition: attachment; filename=$nameNew"); //
				readfile($nameOld);
			break;
			
			case 9:
				$nameOld = "./assets/$sessionGate/ivy_lineRenderingSE.jpg";
				$nameNew = "ivy_lineRenderingSE.jpg";
				header("Content-Transfer-Encoding: binary");
				header("Content-Type: ".mime_content_type("$nameOld")."");
				header("Content-disposition: attachment; filename=$nameNew"); //
				readfile($nameOld);
			break;
			
			case 10:
				$nameOld = "./assets/$sessionGate/ivy_logo.pdf";
				$nameNew = "ivy_logo.pdf";
				header("Content-Transfer-Encoding: binary");
				header("Content-Type: ".mime_content_type("$nameOld")."");
				header("Content-disposition: attachment; filename=$nameNew"); //
				readfile($nameOld);
			break;
			
			case 11:
				$nameOld = "./assets/$sessionGate/ivy_teamLogo.pdf";
				$nameNew = "ivy_teamLogo.pdf";
				header("Content-Transfer-Encoding: binary");
				header("Content-Type: ".mime_content_type("$nameOld")."");
				header("Content-disposition: attachment; filename=$nameNew"); //
				readfile($nameOld);
			break;
				
			case 12:
				$nameOld = "./assets/$sessionGate/IVYneighbourhood2016-12-01.pdf";
				$nameNew = "ivy_neighbourhood.pdf";
				header("Content-Transfer-Encoding: binary");
				header("Content-Type: ".mime_content_type("$nameOld")."");
				header("Content-disposition: attachment; filename=$nameNew"); //
				readfile($nameOld);
			break;
			
			case 13:
				$nameOld = "./assets/$sessionGate/IVYlobby.jpg";
				$nameNew = "IVYlobby.jpg";
				header("Content-Transfer-Encoding: binary");
				header("Content-Type: ".mime_content_type("$nameOld")."");
				header("Content-disposition: attachment; filename=$nameNew"); //
				readfile($nameOld);
			break;
			
			default:
			header("location: ../access");
			break;
			
		}
	}
}
else
{
	header("location: ../access");
}

?>