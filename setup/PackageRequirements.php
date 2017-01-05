<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

<!--    Install Required Packages   -->

sudo apt-get install git build-essential qt4-dev-tools yasm uuid-dev \
libfreetype6-dev libmp3lame-dev libxinerama-dev libtag1-dev make gcc g++ \
libexiv2-dev libdbd-mysql-perl libnet-upnp-perl libdbi-perl python-urlgrabber \
python-mysqldb libqt4-sql-mysql libtool-bin autoconf 

<!--    For Xubuntu 15.04 you might want to install ALSA sound driver as well
        since Pulse is not the recommended sound system for
        Mythtv:
-->

sudo apt-get install libasound2-dev

<!--    Download MythTV Source Code
        Follow the instructions or for the latest stable version
-->

git clone -b fixes/0.27 git://github.com/MythTV/mythtv.git

<!--    will create a subdirectory named mythtv which contains the source code.

        To update your copy of the source code, change to the mythtv directory
        created, and then
-->

git pull

<!--    Configure the MythTV Compile Options

        Change to the mythtv directory created when you downloaded the source
        code using Git, then
-->

./configure

<!--    To see a list of all possible options run
-->

./configure --help

<!--    Describing all of the options is outside the scope of this document. 

        Important.png Note: If you get an error message telling you that 
        something is missing then you did not install something which had 
        to be installed before installing MythTV (those are called 
        dependencies). Please seek help on the mythtv-users mailing list..

        Compile and install MythTV

        Change to the mythtv directory created when you downloaded the source
        code using Git (if you aren't already there from the previous section),
        then
-->

make
sudo make install

    </body>
</html>
