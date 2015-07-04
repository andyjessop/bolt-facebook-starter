# Bolt Facebook SDK Starter

A starter extension for working with the facebook SDK.

## Installation

Create extension directory:
  
    mkdir extensions/local
    mkdir extensions/local/yourname
    cd extensions/local/yourname

Clone this repo into it:

    git clone git@github.com/andyjessop/bolt-facebook-starter.git

Follow the [official Bolt instructions](https://docs.bolt.cm/extensions/config) to get your extension up and running.

Create your Facebook app:

1. Go to http://developers.facebook.com > My Apps > Add a New App
2. Hit 'Advanced Setup'
3. Fill in all the details and create your app
4. Go to the 'Settings' tab and add your email address
5. Go to the 'Status and Review' tab and make your app go live

Add your App ID and App Secret to config.yml. From within `extensions/local/yourname/facebook` folder:

    cp config.yml.dist config.yml

Then add your details to the new `config.yml`.

You should then be good to go. Reference for the Facebook graph can be found [here](https://developers.facebook.com/docs/graph-api/reference), and for the PHP SDK (v4) [here](https://developers.facebook.com/docs/php/api/4.0.0).






