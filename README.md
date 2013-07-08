ROMDL
=====

ROMDL is a ROM downloader for http://theoldcomputer.com.

This basically takes their URLs for the ROMs which has a base64 encoded part that reveals the path to the ROM.

##This avoids
* Having to login
* Paying to have access to the restricted roms
* Their download speed limits.

##Example URL
For Super Mario Bros. 3 on the NES: `http://www.theoldcomputer.com/roms/getfile.php?file=Li9OaW50ZW5kby9ORVMvVVNBL1N1cGVyJTIwTWFyaW8lMjBCcm90aGVycyUyMDMuemlw`

##Decode & URL Fix
Once you paste the full link and click the download button, The encoded part is the only thing needed and is decoded and tacked onto the base URL of http://theoldcomputer.com/roms/.
`http://www.theoldcomputer.com/roms/./Nintendo/NES/USA/Super%20Mario%20Brothers%203.zip`

####My Comments
* Their method of authentication and keeping their roms limited to groups is pretty poor.
* Their Use of Base64 encoding the filepath and using that to link up the roms is not very smart. Any sap can decode Base64.
* The PHP code I wrote with help from a friend is pretty terrible I think.
* I used [bootstrap](http://getbootstrap.com), that was a plus for me.
