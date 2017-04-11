# BlizzPro Wordpress Themes
Wordpress Themes for blizzpro.com

## Compiling Theme Stylesheets

These themes use [Less](http://lesscss.org/) to compile stylesheets. To get started, you need to have [NodeJS](https://nodejs.org/en/) installed and then run `npm install` in the root of your repository.

After this compiling the stylesheets is as simple as running one of these NPM commands.

```
npm run-script blizzpro2016
npm run-script blizzpro2016-hs
npm run-script blizzpro2016-heroes
npm run-script blizzpro2016-warcraft
npm run-script blizzpro2016-diablo
npm run-script blizzpro2016-starcraft
npm run-script blizzpro2016-overwatch

```

**Note:** It is important that you run this after making any changes to the less files in the child theme or in the blizzpro2016 parent, as all child themes inherit from this.