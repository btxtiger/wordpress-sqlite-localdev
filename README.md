# wordpress_EN-sqlite-localdev
Wordpress en-US 4.9.2 with SQLite integration (no MySQL) and local dev start script, which starts the integrated php server.

## Quick Start
- Clone repository to your prefered directory running<br>
```git clone https://github.com/btxtiger/wordpress-sqlite-localdev.git```

- Run startup script. This starts the integrated php server. It should automatically open your webbrowser.<br>
```./localdev.up.sh```

- If your webbrowser doesn't start, you can eather install python to your device or just open `http://localhost:4455` manually

- !!! Note !!!: If you consider to use this build for production, you should generate your own secret keys! Open `public/wp-config.php` and scroll down until **Authentication Unique Keys and Salts**. Use the wordpress key generator to generate your individual keys.