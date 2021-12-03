# Installing and Configuring MongoDB and PHP

Requirements are outlined in the sections of this document.

Please read ALL the steps for your platform BEFORE starting.

Jump to the relevant section on installing and configuring MongoDB and PHP.

- [Windows](#windows-10-and-laragon)
- [Mac](#macos-docker-and-sail-mac)


## Windows 10 and Laragon

You will need the following:

We have only added links to some items below, as will become clear as you progress through this section.

- Windows 10+
- [Laragon 5+]()
    - PHP 8.0
    - MongoDB
    - NodeJS
    - [PHP 8.0 MongoDB Driver]()
    - Robo3T - or [MongoDB Compass]()
    - 
- [PhpStorm]()
  - If you wish to use VS Code, then Laragon comes with a quick installation method for this. See step 6.

1. Follow the instructions on the relevant website to install Laragon and PhpStorm (or VS Code).
2. If you have Laragon running, exit Laragon completely by right mouse clicking on the application window, then selecting exit. If you cannot see the window, then in the system tray at the bottom right, click the little ^ and locate the blue or green square icon. Click this to open the application window.
3. Add PHP 8: Right Mouse click on the Laragon window. Hover over Quick Add, then hover over and click **PHP 8.0** to install it.
4. Add MongoDB: Right Mouse click on the Laragon window. Hover over Quick Add, then hover over and click **MongoDB-5** to install it.
5. Add Robo3T: Right Mouse click on the Laragon window. Hover over Quick Add, then hover over and click **RoboMongo** to install it.
6. Add VS Code (Optional): Right Mouse click on the Laragon window. Hover over Quick Add, then hover over and click **code** to install it.
6. Download the [PHP 8.0 Thread Safe (64 bit) MongoDB driver](https://pecl.php.net/package/mongodb) by visiting the site, locating the most up to date release version (1.11.1 at time of writing), and clicking on the DLL text. [Direct Link MongoDB 7](https://windows.php.net/downloads/pecl/releases/mongodb/1.11.1/php_mongodb-1.11.1-8.0-ts-vs16-x64.zip).
7. Using Windows File Explorer (`WIN`+`E`), go to the Downloads folder, and uncompress the PHP MongoDB Driver files. Double click the folder to open it. Now open a second Windows Explorer folder and navigate to: `C:\laragon\bin\php\`. In here, locate the PHP 8.0 installation, double click to open the folder and then double click on the `ext` folder. Drag and drop the `.dll` and `.pdb` files from the Mongo Driver folder to this `ext` folder. [† PHP 7.4](#php7.4)
8. Download the provided [Laragon packages.conf](packages.conf) configuration file. Using the first  File Explorer window, locate this in the Downlaods folder. Using the second  File Explorer window, navigate to `C:\laragon\usr\` folder. Rename the `packages.conf` file to `packages-old.conf`. Drag and drop the packages file into this folder.
9. 
10. Restart Laragon.



# MacOS, Docker and Sail

TODO: Write section on Mac OS, Docker and Sail

We have only added links to some items below, as will become clear as you progress through this section.

You will need the following:

- Mac OS
- [Docker Desktop]()
- [PhpStorm]() or other Editor/IDE, eg [Visual Studio Code]()







------
## Footnotes:

> † [](#) If you are using PHP 7.4 then you will need to download the PHP 7.4 version of the Driver files [Direct Link](https://windows.php.net/downloads/pecl/releases/mongodb/1.11.1/php_mongodb-1.11.1-7.4-ts-vc15-x64.zip). 

> †† []()

> ¶ []()

> § []()
 
> || []()
 
> # []()
 

