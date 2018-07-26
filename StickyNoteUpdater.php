<?php
if ($_POST[length]!="")
	{
	if(!filter_var($_POST[length], FILTER_VALIDATE_INT) === false OR $_POST[length]=="0")
		{
		if ($_POST[length]!="0")
			{
			if (strlen($_POST[mypostit])==$_POST[length])
				{
				// THE FINAL VALUE IS $_POST[mypostit]

				}
				else
				{
				header("HTTP/1.1 500 Internal Server");
				header("Content-Type: application/json; charset=UTF-8");
				die(json_encode(array("message" => "ERROR", "code" => 1)));
				}
			}
			else
			{
			if (strlen($_POST[mypostit])==0 AND $_POST[length]=="0")
				{
				// THE FINAL VALUE IS EMPTY

				}
				else
				{
				header("HTTP/1.1 500 Internal Server");
				header("Content-Type: application/json; charset=UTF-8");
				die(json_encode(array("message" => "ERROR", "code" => 2)));
				}
			}
		}
		else
		{
		header("HTTP/1.1 500 Internal Server");
		header("Content-Type: application/json; charset=UTF-8");
		die(json_encode(array("message" => "ERROR", "code" => 3)));
		}
	}
?>