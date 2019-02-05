<?php
if ($_POST[length]!="")
	{
	if(!filter_var($_POST[length], FILTER_VALIDATE_INT) === false OR $_POST[length]=="0")
		{
		if ($_POST[length]!="0")
			{
			if (strlen($_POST[mypostit])==$_POST[length])
				{
				// INSERT CODE FOR SAVING DATA HERE
				// THE FINAL VALUE IS $_POST[mypostit]



				// RETURNING THAT THE DATA WAS SAVED
				header("HTTP/1.1 200 Internal Server");
				header("Content-Type: text/plain; charset=UTF-8");
				echo "1";die;exit;

				}
				else
				{
				header("HTTP/1.1 200 Internal Server");
				header("Content-Type: text/plain; charset=UTF-8");
				echo "0";die;exit;
				}
			}
			else
			{
			if (strlen($_POST[mypostit])==0 AND $_POST[length]=="0")
				{
				// INSERT CODE FOR SAVING DATA HERE
				// THE FINAL VALUE IS EMPTY



				// RETURNING THAT THE DATA WAS SAVED
				header("HTTP/1.1 200 Internal Server");
				header("Content-Type: text/plain; charset=UTF-8");
				echo "1";die;exit;
				}
				else
				{
				header("HTTP/1.1 200 Internal Server");
				header("Content-Type: text/plain; charset=UTF-8");
				echo "0";die;exit;
				}
			}
		}
		else
		{
		header("HTTP/1.1 200 Internal Server");
		header("Content-Type: text/plain; charset=UTF-8");
		echo "0";die;exit;
		}
	}
?>