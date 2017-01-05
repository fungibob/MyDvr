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

<!--
        1 Installing Git for Linux
        Download and install Git for Linux :
-->

    sudo apt-get install git

<!-- 
        2 Configuring GitHub
        Once the installation has successfully completed, the next thing to do is to
        set up the configuration details of the GitHub user. To do this use the following
        two commands by replacing "user_name" with your GitHub username and replacing
        "email_id" with your email-id you used to create your GitHub account.
-->

    git config --global user.name "user_name"
    git config --global user.email "email_id"
    
<!--
        3 Creating a local repository
        Create a folder in your system. This will serve as a local repository which
        will later be pushed onto the GitHub website. Use the following command:
-->

    git init Mytest

<!--
        If the repository is created successfully, then you will get the following line:
        Initialized empty Git repository in /home/akshay/Mytest/.git/

        This line may vary depending on your system.

        So here, Mytest is the folder that is created and "init" makes the folder a
        GitHub repository. Change the directory to this newly created folder:
-->

    cd Mytest

<!--
        4 Creating a README file to describe the repository
        Now create a README file and enter some text like "this is a git setup on
        linux". The README file is generally used to describe what the repository 
        contains or what the project is all about. Example:
-->

    gedit README

<!--
        You can use any other text editors. I use gedit. The content of the README
        file will be:

        This is a git repo
-->

<!--
        5 Adding repository files to an index

        This is an important step. Here we add all the things that need to be pushed
        onto the website into an index. These things might be the text files or 
        programs that you might add for the first time into the repository or it 
        could be adding a file that already exists but with some changes (a newer
        version/updated version).

        Here we already have the README file. So, lets create another file which 
        contains a simple C program and call it sample.c. The contents of it will be:
 
        #include<stdio.h>
        int main()
        {
        printf("hello world");
        return 0;
        }

        So, now that we have 2 files

        README and sample.c

        add it to the index by using the following 2 commands:
-->

    git add README
    git add smaple.c

<!--
        Note that the "git add" command can be used to add any number of files and
        folders to the index. Here, when I say index, what I am refering to is a buffer
        like space that stores the files/folders that have to be added into the 
        Git repository.
-->

    </body>
</html>
