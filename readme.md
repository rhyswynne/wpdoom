```
                    -/+osssssssssssso+/-`
               ./oys+:.`            `.:+syo/.
            .+ys:.   .:/osyyhhhhyyso/:.   ./sy+.
          /ys:   -+ydmmmmmmmmmmmmmmmmmmdy+-   :sy/
        /h+`  -odmmmmmmmmmmmmmmmmmmmmmmmmmmdo-  `+h/
      :ho`  /hmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmds/   `oh:
    `sy.  /hmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmd+        .ys`
   .ho  `sdddhhhyhmmmdyyhhhdddddhhhyydmmmmy           oh.
  .h+          ``-dmmy.``         ``.ymmmmh            +h.
 `ho  `       /mmmmmmmmmmo       .dmmmmmmmms        ~~  oh`
 oy  .h`       ymmmmmmmmmm:       /mmmmmmmmmy`      -d.  yo
.d-  ymy       `dmmmmmmmmmd.       ymmmmmmmmmh`     /my  -d.
oy  -mmm+       /mmmmmmmmmmy       .dmmmmmmmmmy     ymm-  yo
h+  +mmmd-       smmmmmmmmmm+       /mmmmmmmmmm-   :mmm+  +h
d/  smmmmh`      `dmmmmmmmmmd`       smmmmmmmmm:  `dmmms  /d
d/  smmmmms       :mmmmmmmmm+        `dmmmmmmmd.  smmmms  /d
h+  +mmmmmm/       smmmmmmmh  +       /mmmmmmmy  /mmmmm+  +h
oy  -mmmmmmd.      `dmmmmmd- +m/       smmmmmd. .dmmmmm-  yo
.d-  ymmmmmmh       :mmmmm+ .dmd-      `dmmmm/  ymmmmmy  -d.
 oy  .dmmmmmmo       smmmh  hmmmh`      :mmmy  +mmmmmd.  yo
 `ho  -dmmmmmd:      `dmd- ommmmms       smd- .dmmmmd-  oh`
  .h+  -dmmmmmd`      :m+ -dmmmmmm:      `do  hmmmmd-  +h.
   .ho  .ymmmmmy       + `hmmmmmmmd.      :` ommmmy.  oh.
    `sy.  /hmmmm+        ommmmmmmmmy        -dmmh/  .ys`
      :ho`  /hmmd-      :mmmmmmmmmmmo      `hmh/  `oh:
        /h+`  -odh`    `dmmmmmmmmmmmd:     oo-  `+h/
          /ys:   ~~    smmmmmmmmmmmmmd`       :sy/
            .+ys/.    `/osyyhhhhyyso/:`   ./sy+.
               ./oys+:.`            `.:+syo/.
                   `-/+osssssssssssso+/-`



=================     ===============     ===============   ========  ========
\\ . . . . . . .\\   //. . . . . . .\\   //. . . . . . .\\  \\. . .\\// . . //
||. . ._____. . .|| ||. . ._____. . .|| ||. . ._____. . .|| || . . .\/ . . .||
|| . .||   ||. . || || . .||   ||. . || || . .||   ||. . || ||. . . . . . . ||
||. . ||   || . .|| ||. . ||   || . .|| ||. . ||   || . .|| || . | . . . . .||
|| . .||   ||. _-|| ||-_ .||   ||. . || || . .||   ||. _-|| ||-_.|\ . . . . ||
||. . ||   ||-'  || ||  `-||   || . .|| ||. . ||   ||-'  || ||  `|\_ . .|. .||
|| . _||   ||    || ||    ||   ||_ . || || . _||   ||    || ||   |\ `-_/| . ||
||_-' ||  .|/    || ||    \|.  || `-_|| ||_-' ||  .|/    || ||   | \  / |-_.||
||    ||_-'      || ||      `-_||    || ||    ||_-'      || ||   | \  / |  `||
||    `'         || ||         `'    || ||    `'         || ||   | \  / |   ||
||            .===' `===.         .==='.`===.         .===' /==. |  \/  |   ||
||         .=='   \_|-_ `===. .==='   _|_   `===. .===' _-|/   `==  \/  |   ||
||      .=='    _-'    `-_  `='    _-'   `-_    `='  _-'   `-_  /|  \/  |   ||
||   .=='    _-'          `-__\._-'         `-_./__-'         `' |. /|  |   ||
||.=='    _-'                                                     `' |  /==.||
=='    _-'                                                            \/   `==
\   _-'                                                                `-_   /
 `''                                                                      ``'
    
```

# WP Doom
A WordPress Plugin that runs Doom.

WP Doom was a plugin experiment that asks "Can WordPress - the popular CMS - run Doom?". Basically, it uses a shortcode and [JS-DOS](https://js-dos.com/overview.html) to run Doom within a WordPress page using a WordPress shortcode.

## Installation Instructions

1. Download the plugin by clicking Code, Download ZIP
2. Open a WordPress instance and go to Plugins > Add New
3. Click the "Upload Plugin" and upload the zip downloaded in step 1.
4. Activate the plugin
5. Create a page or post, and add the short code `[wpdoom]` to the page.
6. Visit the page, click "Skip Loading Saves" and then the big play button.

| Controls      | Action |
| ------------- | ------------- |
| Directional Keys  | Move Forwards/Backwards & Turn Left/Right  |
| Enter  | Action Menu Item  |
| Mouse Click  | Fire Weapon  |
| Space  | Interact with environment (open doors/press switches) |
| Number Keys  | Change weapons  |
| < & >  | Strafe Left/Right  |


## Playground
I've tested this plugin with the WP Playground. You can run it here - [Doom on WP Playground](https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/rhyswynne/WP-Doom-Playground/master/wp-doom-blueprint.json).

You can view a github of the WP Playground repository [here](https://github.com/rhyswynne/WP-Doom-Playground) - please note this plugin is manually transferred over to the repo every so often.

## Credits

* This plugin is written by myself (Rhys Wynne), who wrote about the experience about building it [here](https://dwinrhys.com/2024/05/08/can-wordpress-run-doom-of-course-it-can-heres-how/). I am a WordPress developer based in North West England, and I freelance under the name [Dwi'n Rhys](https://dwinrhys.com/)
* [JS-DOS](https://js-dos.com/) - &copy; Alexander Guryanov
* Doom &copy; 1993 id Software.
* WordPress is released under the GPLv2 licence.

## Improvements and Suggestions
Here's a list of things I want to do at some point.

* **Run it on WebAssembly** – I feel it’s a bit of a cheat. It’s not WordPress running Doom, but rather DOS emulation running in JavaScript. WordPress is indeed very much on the side. There are ways to execute code in WordPress Playground, and you can run [WASM-Doom](https://doom.fandom.com/wiki/Wasm-doom) which is Doom in WebAssembly. I’m sure it’s possible.
* **Turn it into a Gutenberg block** – I’m running everything from a shortcode as it was quicker and easier for me to build. Eventually I’d love to turn it into a block.
* **Sound** – you will notice that there is no sound. This I believe is due to not being able to set it up before loading Doom. Those of us of a certain vintage would know you’d have to setup Doom with a soundcard before playing the game. We have skipped this step in the creation of the JS-DOS bundle. Fairly sure we can work around it, again maybe running it as WASM-Doom would fix this.
* **Controls are a bit all over the place** – The controls are really bad. I wish there was a way to configure it. Again, maybe something for WASM-Doom.
Still too many steps for my liking – you have to skip the loading files, and click play, to make sure it works. It’d be nice to skip these steps, maybe WASM-Doom would fix it?


This plugin is released under the GPL-LOLNO licence. But do what you want with this, I'm not your real dad.