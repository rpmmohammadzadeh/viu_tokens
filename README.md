In terms of design, the VIU design system contains four categories of icons:
1- UI icon outline:
This category is used for navigation elements where the icon should be less prominent with functional usage, this icon doesn't have any industry or strategic message.
Dimension: these icons can be used in these sizes: 16px, 24px, 32px, 40px
Stroke size: these icons must always be used with a 1px stroke. 
Design board: 
https://www.figma.com/file/obDqVNt48fjJAt9aek2wi7/VIU-Design-system?node-id=36642%3A15759&t=EdcGNGZ6PQSd1BE2-4 - Connect your Figma account 

2-UI icon filled:
This category is used for navigation elements where they help the action to be visible with functional usage, this icon doesn't have any industry or strategic message. We never use the outline icons and filled icons together.
Dimension: these icons can be used in these sizes: 16px, 24px, 32px, 40px
Design board:
https://www.figma.com/file/obDqVNt48fjJAt9aek2wi7/VIU-Design-system?node-id=37602%3A15950&t=EdcGNGZ6PQSd1BE2-4 - Connect your Figma account 

3-Product icon:
A category of icons dedicated to products and insurance coverage. we use these icons on the navigation menu, content, and quote… where we list our products and coverages.
Dimension: these icons can be used in these sizes: 16px, 24px, 32px, 40px
Design board: 
https://www.figma.com/file/obDqVNt48fjJAt9aek2wi7/VIU-Design-system?node-id=36749%3A15724&t=EdcGNGZ6PQSd1BE2-4 - Connect your Figma account 

4-icon illustration
A category of icons richer in visual language dedicated to our services, benefits, and products. They use the main brand colors and since they contain more details we use them in a bigger format to insure the quality of viability.
Dimension: these icons can be used in these sizes: 48px, 64px, 80px, 112px and 144px
Important note:
Icon illustrations are not always with the same stroke size and the stroke size change in relation to the dimension of the icon as flows:

 
Design board:
https://www.figma.com/file/obDqVNt48fjJAt9aek2wi7/VIU-Design-system?node-id=37301%3A15731&t=EdcGNGZ6PQSd1BE2-4 - Connect your Figma account 

Icon's repository:
In the Viu design system icons are considered a token that is managed via a JSON file. The Icon.Json file is delivered to developers together with a folder of icons. All icons are exported from Figma only in a single size.

This file will be replaced with the online repo
 

viu_Icon.zip
15 Mar 2023, 09:04 am

Tokens and JSON file
In the front end, we use the SVG code of icons which allows us to manage the dimension and the stroke size of icons directly via code. Instead, the repository of icons is a single source of thought to be consumed on Sitecore by content managers.

Icon size and related strokes are managed in the front end using the tokens dedicated to icon size.


1    "ui_icon_outline_sizing": [
2        {
3        "value": "16",
4        "type": "spacing",
5        "description": "small ui outline icons (16px)"
6        },
7        {
8        "value": "24",
9        "type": "spacing",
10        "description": "medium ui outline icons (24px)"
11        },
12        {
13        "value": "32",
14        "type": "spacing",
15        "description": "large ui outline icons (32px)"
16        },
17        {
18        "value": "40",
19        "type": "spacing",
20        "description": "extra ui large outline icons (40px)"
21        }
22    ],
 
Icon token contains four main pieces of information:


{
    "value": "options_outline",
    "type": "ui_outline",
    "src": "icons/ui_outline/options_outline.svg",
    "description":"System: viu, token type: reference, usage: we use this icon to indicate configuration feature, this icon is designed with 1px stroke size on a 32x32px container and keeping the 1px stroke size it can also be used on 16px, 24px and 40px containers",     "code":"<svg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 32 32' fill='none'><path d='M23 8H28M4 8H19M23 24H28M4 24H19M13 16H28M4 16H9' stroke='#4A6382' stroke-linecap='round' stroke-linejoin='round' vector-effect='non-scaling-stroke' stroke-width='1px'></path><path d='M21 10C22.1046 10 23 9.10457 23 8C23 6.89543 22.1046 6 21 6C19.8954 6 19 6.89543 19 8C19 9.10457 19.8954 10 21 10Z' stroke='#4A6382' stroke-linecap='round' stroke-linejoin='round' vector-effect='non-scaling-stroke' stroke-width='1px'></path><path d='M11 18C12.1046 18 13 17.1046 13 16C13 14.8954 12.1046 14 11 14C9.89543 14 9 14.8954 9 16C9 17.1046 9.89543 18 11 18Z' stroke='#4A6382' stroke-linecap='round' stroke-linejoin='round' vector-effect='non-scaling-stroke' stroke-width='1px'></path><path d='M21 26C22.1046 26 23 25.1046 23 24C23 22.8954 22.1046 22 21 22C19.8954 22 19 22.8954 19 24C19 25.1046 19.8954 26 21 26Z' stroke='#4A6382' stroke-linecap='round' stroke-linejoin='round' vector-effect='non-scaling-stroke' stroke-width='1px'></path></svg>"
}

Value: which presents the icon name
Type: This indicates the category of an icon among the four categories already mentioned.
SRC: indicates SVG file address of icon in icon repository.
Description: contains information about the token name.
Code: contains the SVG code of the token.
Icon’s Showcase
To understand in practice how the icons should be displayed, a preview version in HTML has been developed which should be run on the web server.


