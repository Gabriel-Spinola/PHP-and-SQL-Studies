<?php
	// file_get_contents ('filename');
	// file_put_contents ('filename', 'content');

	/*
		handling folders
	*/

	// mkdir ('folder');

	/*

		if (is_dir ('request.php')) {
			echo 'is a valid folder';
		} else {
			echo 'does not exist or is not a folder';
		}

	*/

	// delete the folder
	// rmdir ('folder');
	if ($handle = opendir('folder')) {
		// This is the correct way to scan the directory
		while ($file = readdir($handle)) {
			if ($file == '.' || $file == '..') {
				continue;
			}

			/*
				if (is_dir ('folder /' . $file) == false) {
				  	// is a file
				} else {
				 	//a folder
				}
			*/

			echo "$file \n";

			echo '<br>';
		}

		closedir ($handle);
	}
?>