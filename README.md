# AutoHome

### Background
For several years, my parents used a set of radio frequency outlets to turn on/off a few lamps in their living room. I always appreciated the functionality and convenience when I would go visit; however, finding the accompanying RF remote was cumbersome because it often lodged iteslf into the most unlikely cracks and crevices.  
At some point, I found myself to be a burgeoning Computer Science major who possessed a set of RF outlets, a Raspberry Pi, and the spirit of ~~laziness~~ innovation.

### Requirements
* Raspberry Pi 3 (or any other verion + USB wifi adapter) with Raspbian Linux
* Jumper wires
* RF Outlets with remote
* Array of 5V relays (two relays per outlet)
* soldering iron, solder, and the ability to solder
* apache
* php
* mysql

### Installation
#### Hardware
1. Set up your Pi (There are many sites with great tutorials)
1. Connect jumper wires from the following pins to the 5V relay inputs
  1. Pin 15
  1. Pin 1
  1. Pin 6
  1. Pin 11
  1. Pin 27
  1. Pin 29
1. Connect a jumper wire from one of the Pi's GRND pins to the GRND pin on the relay array
1. Connect a jumper wire from the Pi's 5V pin to the VCC pin on the relay array
1. Follow the traces on the RF Remote to determine the on/off buttons for each outlet
1. Connect wires to each relay's switch terminals and solder them to the corresponding buttons on the RF remote

#### Software
1. Install apache, mysql, php, and php_apache_mod
1. Create mysql `state` DB with `outlets` table
  1. `outlet`
  1. `outletstate`
1. Initialize the `outlets` table  
outlet | outletstate
------ | -----------
'one' | 'off'
'two' | 'off'
'three' | 'off'
1. Clone this repo into your apache DocumentRoot
1. Rename `db_info.php.example` to `db_info.php` and add your DB login info
1. Start the apache server
1. On a smartphone, navigate to the Pi's IP, then add to home screen
1. Tap the icon on your home screen

### Disclaimer
I **DO NOT** recommend putting this on the internet via port-forwarding, firewall allowance, or any other method. This is a tinkerer project, so have fun with it, but don't get crazy.
