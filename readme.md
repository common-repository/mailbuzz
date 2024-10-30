WP React Plugin Boilerplate is a starter WordPress plugin to develop WordPress Plugin via React and Rest API.

# WP React Plugin Boilerplate

>`WP React Plugin Boilerplate` is a starter WordPress plugin to develop WordPress Plugin via React and Rest API. The Plugin Settings was added by React, Gutenberg Components and Rest API

## GETTING STARTED

Upload the plugin files to the `/wp-content/plugins/mailbuzz` directory, or install the plugin through the WordPress plugins screen directly.

You need to rename the plugin folder name and files name. Also need to rename constants, variables, classes , text-domain, and functions inside of it to fit your needs. For example, if your plugin is named 'react-settings' then:

* rename folder from `mailbuzz` to `react-settings`
* rename all files from `mailbuzz` to `react-settings` PHP,JS and CSS
* change `mailbuzz` to `react_settings`
* change `mailbuzz` to `react-settings`
* change `Mailbuzz` to `React_Settings`
* change `WP_REACT_PLUGIN_BOILERPLATE` to `REACT_SETTINGS`

It's safe to activate the plugin at this point. Activate the plugin through the 'Plugins' screen in WordPress

#### Development Process

<details>
 <summary> Don't have <code>Node.js</code> + <code>npm</code> installed? You have to install them first. (CLICK TO EXPAND)</summary>

Go to the Node's site [download + install](https://nodejs.org/en/download/) Node on your system. This will install both `Node.js` and `npm`, i.e., node package manager — the command line interface of Node.js.

You can verify the install by opening your terminal app and typing...

```sh
node -v
# Results into 7.19.1 — or installed version.

npm -v
# Results into v14.15.1 — or installed version.
```
</details>

Follow the following steps to add your functionalities to the plugin:

1. Navigate to plugin files `/wp-content/plugins/your-renamed-plugin-folder`, open terminal app.
2. Run the `npm install` command to install npm dependencies, wait sometimes to complete it.
3. Run the `npm run packages-update` command to update the package.
4. Run `npm run start` command to initialize development of React JS, Development can be done any time. Use it in the development environment.
5. Run the `npm run build` command to finalize the development and be ready for production. The command creates production files. After building the production file move it to the production level.

Go to WordPress Dashboard => React Settings and View the Default Settings of the Plugin.

## Folder Information

<strong>WP React Plugin Boilerplate</strong> Folder Information

```sh
INSIDE: /wp-installatioon-folder/wp-content/plugins/your-renamed-plugin-folder

├── .gitignore
├── index.php
├── LICENSE.txt
├── package.json
├── readme.md
├── README.txt
├── uninstall.php
├── your-renamed-plugin.php
|
├── admin
|  |  ├── class-your-renamed-plugin-admin.php
|  |  └── index.php
|  |
|  └── partials
|     └── your-renamed-plugin-admin-display.php
|
├── build(auto created via NPM)
|  └── admin
|     ├── settings.asset.php
|     ├── settings.js
|     └── style-settings.css
|
├── includes
|  ├── class-your-renamed-plugin.php
|  ├── class-your-renamed-plugin-activator.php
|  ├── class-your-renamed-plugin-deactivator.php
|  ├── class-your-renamed-plugin-i18n.php
|  ├── class-your-renamed-plugin-include.php
|  ├── class-your-renamed-plugin-loader.php
|  ├── functions.php
|  └── index.php
|
├── languages
|  └── your-renamed-plugin.pot
|
├── public
|  |  ├── class-your-renamed-plugin-public.php
|  |  └── index.php
|  |
|  ├── css
|  |  └── your-renamed-plugin-public.css
|  |
|  ├── js
|  |  └── your-renamed-plugin-public.js
|  |
|  └── partials
|     └── your-renamed-plugin-public-display.php
|
└── src
   ├── admin
   |  └── settings
   |     ├── atoms
   |     |   ├── nav.js
   |     |   └── save-btn.js
   |     ├── molecules
   |     |   ├── navlist.js
   |     |   └── notice.js
   |     ├── organisms
   |     |   ├── footer.js
   |     |   └── header.js
   |     ├── pages
   |     |   ├── advanced.js
   |     |   └── general.js
   |     ├── utils
   |     |    └── get-nav.js
   |     ├── routes.js
   |     └── style.scss
   |  
   |
   ├── api
   |  └── settings.js
   ├── context
   |  └── SettingsContext.js
   ├── reducer
   |  └── settings-reducer.js
   |
   └── settings.js
```

## Changelog

### 1.0.1
#### Major Update
* Added: Uses React Router, Context, and Reducer
* Added: Atomic Design Methodology
* Added: [AT Grid](https://github.com/jamesstanley/at-grid)
* Added: Uses Inbuilt WordPress Settings API
* Added: Settings via register_setting
* Updated: UI and UX
* Removed: Custom API and Custom Sanitization Functions

### 1.0.0
* Initial Release

## License & Attribution
- GPLv2 or later © [Santosh Kunwar](https://twitter.com/jamesstanley).

I would like to thanks all the React.js team, Gutenberg Team, WordPress Core Contributors, WordPress Plugin Boilerplate teams and My friends to motivate me to create the starter plugin.


## About Me
<strong>I just love WordPress more…</strong>

- [![CoderSantosh on Twitter](https://img.shields.io/twitter/follow/jamesstanley.svg)](https://twitter.com/jamesstanley/)
- <a href="https://profiles.wordpress.org/jamesstanley/" target="_blank"><img src="https://s.w.org/style/images/about/WordPress-logotype-wmark.png" width="50" height="50" />WordPress Profile</a>

### Recent Projects
<a href="https://wordpress.org/plugins/gutentor/" target="_blank"><img src="https://ps.w.org/gutentor/assets/icon.svg" width="50" height="50" />Gutentor - WordPress Page Building Blocks - Page Builder for Gutenberg</a>
