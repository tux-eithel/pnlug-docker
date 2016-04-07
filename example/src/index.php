<?php

if (getenv("MY_NAME") !== false) {
	echo "hello from <b>" . getenv("MY_NAME") . "</b>";
} else {
	echo "i don't know my name :(";
}
