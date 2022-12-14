<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Parent theme: Bootstrapbase by Bas Brands
 * Built on: Essential by Julian Ridden
 *
 * @package   theme_lambda
 * @copyright 2022 redPIthemes
 *
 */

/* Core */
$string['configtitle'] = 'lambda';
$string['pluginname'] = 'lambda';
$string['choosereadme'] = '
<div class="clearfix">
<div style="margin-bottom:20px;">
<p style="text-align:center;"><img class="img-polaroid" src="lambda/pix/screenshot.jpg" /></p>
</div>
<hr />
<h2>Lambda - Responsive Moodle Theme</h2>
<div class="divider line-01"></div>
<div style="color: #888; text-transform: uppercase; margin-bottom:20px;">
<p>erstellt von RedPiThemes<br />Theme Dokumentation: <a href="http://redpithemes.com/Documentation/assets/index.html" target="_blank">http://redpithemes.com/Documentation/assets/index.html</a><br />Der Support erfolgt per Ticket im Support-Forum: <a href="https://redpithemes.ticksy.com" target="_blank">https://redpithemes.ticksy.com</a></p>
</div>
<hr />
<p style="text-align:center;"><img class="img-polaroid" src="lambda/pix/redPIthemes.jpg" /></p>';

/* Settings - General */
$string['settings_general'] = 'Allgemein';
$string['logo'] = 'Logo';
$string['logodesc'] = 'Bitte laden Sie hier Ihr individuelles Logo hoch. Wenn Sie ein Logo hochladen, erscheint es in der Kopfzeile.';
$string['logo_res'] = 'Standard-Logo-Dimension';
$string['logo_res_desc'] = 'Setzt die Dimension Ihres Logos auf eine maximale H??he von 90px. Mit dieser Einstellung passt sich Ihr Logo an verschiedene Bildschirmaufl??sungen an, und Sie k??nnen auch eine @2x-Version f??r hochaufl??sende Bildschirme verwenden.';
$string['favicon'] = 'Favicon';
$string['favicon_desc'] = '??ndern Sie das Favicon f??r Lambda. Bilder mit einem transparenten Hintergrund und 32px H??he funktionieren am besten. Erlaubte Typen: PNG, JPG, ICO';
$string['pagewidth'] = 'Seitenbreite festlegen';
$string['pagewidthdesc'] = 'W??hlen Sie aus der Liste der verf??gbaren Seitenlayouts.';
$string['boxed_wide'] = 'Boxed - feste Breite';
$string['boxed_narrow'] = 'Boxed - feste Breite schmal';
$string['boxed_variable'] = 'Boxed - variable Breite';
$string['full_wide'] = 'Volle Breite';
$string['page_centered_logo'] = 'Kopfzeile mit zentriertem Logo';
$string['page_centered_logo_desc'] = 'Markieren Sie die Checkbox, um eine Variation f??r die Kopfzeile mit einem zentrierten Logo zu verwenden.';
$string['section_0_open'] = 'Oberster Kursabschnitt immer ge??ffnet';
$string['section_0_open_desc'] = 'W??hlen Sie diese Einstellung, wenn Sie den oberen allgemeinen Kursabschnitt immer ge??ffnet haben m??chten. Mit dem "Themenformat" oder "Wochenformat" ist der obere Bereich eines Kurses damit nicht mehr einklappbar.';
$string['category_layout'] = 'Ansicht der Kurskategorie';
$string['category_layout_desc'] = 'W??hlen Sie in der Kurskategorieansicht ein Layout f??r die Kurse aus. Sie k??nnen w??hlen, ob Sie Ihre Kurse in einer Liste oder in einer Grid-Ansicht anzeigen m??chten.';
$string['category_layout_list'] = 'Kurs-Liste';
$string['category_layout_grid'] = 'Kurs-Grid';
$string['footnote'] = 'Fu??note';
$string['footnotedesc'] = 'Alles, was Sie zu diesem Textbereich hinzuf??gen, wird in der Fu??zeile Ihrer Moodle-Site angezeigt, z.B. Copyright und der Name Ihrer Organisation.';
$string['customcss'] = 'Benutzerdefiniertes CSS';
$string['customcssdesc'] = 'Welche CSS-Regeln Sie auch immer zu diesem Textbereich hinzuf??gen, sie werden auf jeder Seite reflektiert, was die Anpassung dieses Themas erleichtert.';
$string['bs4_layout_files'] = 'Bootstrap 4 Layout-Dateien laden';
$string['bs4_layout_files_desc'] = 'W??hlen Sie diese Option aus, um die Kompatibilit??t mit dem Bootstrap 4 Grid-System zu aktivieren. Diese Einstellung sollte nur verwendet werden, wenn Sie zuvor ein Boost-basiertes Theme verwendet haben und Ihre erstellten Inhalte unter Lambda anders dargestellt werden als zuvor.';

/* Settings - Background images */
$string['settings_background'] = 'Hintergrundbilder';
$string['list_bg'] = 'Seitenhintergrund';
$string['list_bg_desc'] = 'W??hlen Sie den Seitenhintergrund aus einer Liste der enthaltenen Hintergrundbilder aus.<br /><strong>Hinweis:</strong> Wenn Sie unten ein Bild hochladen, wird Ihre Auswahl hier in der Liste verworfen.';
$string['pagebackground'] = 'Eigenes Hintergrundbild hochladen';
$string['pagebackgrounddesc'] = 'Laden Sie Ihr eigenes Hintergrundbild hoch. Wenn keines hochgeladen wird, wird ein Standardbild aus der obigen Liste verwendet.';
$string['page_bg_repeat'] = 'Hochgeladenes Bild wiederholen?';
$string['page_bg_repeat_desc'] = 'Wenn Sie einen gekachelten Hintergrund (wie ein Muster) hochgeladen haben, sollten Sie das Kontrollk??stchen markieren, um das Bild ??ber den Seitenhintergrund zu wiederholen.<br /> Andernfalls, wenn Sie das K??stchen nicht markiert lassen, wird das Bild als ganzseitiges Hintergrundbild verwendet, dass das gesamte Browserfenster abdeckt.';
$string['header_background'] = 'Eigenes Header-Bild hochladen';
$string['header_background_desc'] = 'Laden Sie Ihr eigenes Header-Bild hoch. Wenn kein Bild hochgeladen wird, wird ein wei??er Standardhintergrund f??r den Header verwendet.';
$string['header_bg_repeat'] = 'Header-Bild wiederholen?';
$string['header_bg_repeat_desc'] = 'Wenn Sie einen gekachelten Hintergrund (wie ein Muster) hochgeladen haben, sollten Sie das Kontrollk??stchen ankreuzen, um das Bild im Header ??ber dem Hintergrund zu wiederholen.<br />Anderenfalls wird das Bild so gro?? wie m??glich skaliert, so dass der Header-Bereich vollst??ndig vom Hintergrundbild bedeckt wird.';
$string['category_background'] = 'Hintergrundbanner der Kurskategorie';
$string['category_background_desc'] = 'Laden Sie Ihr eigenes Hintergrundbanner-Bild f??r die Moodle-Kurskategorieansicht hoch. Wenn keines hochgeladen wird, wird ein Standardbild verwendet.';
$string['banner_font_color'] = 'Schriftfarbe f??r das Banner';
$string['banner_font_color_desc'] = 'Das Standard-Banner-Hintergrundbild f??r die Moodle-Kurskategorie-Ansicht ist abgeblendet. Daher wird dort wei??e Schriftfarbe verwendet. Wenn Sie ein eigenes Bannerbild hochladen, kann es sinnvoll sein, eine andere Schriftfarbe zu verwenden.';
$string['banner_font_color_opt0'] = 'wei?? (Standard)';
$string['banner_font_color_opt1'] = 'dunkel';
$string['banner_font_color_opt2'] = 'Hauptthema Farbe';
$string['hide_category_background'] = 'Das Hintergrundbanner der Kategorie ausblenden?';
$string['hide_category_background_desc'] = 'Markieren Sie die Checkbox, wenn Sie das Kategorie-Hintergrundbanner vollst??ndig ausblenden m??chten.';

/* Settings - Colors */
$string['settings_colors'] = 'Farben';
$string['maincolor'] = 'Theme Farbe';
$string['maincolordesc'] = 'Die Hauptfarbe Ihres Themes - dies wird mehrere Komponenten ??ndern, um die gew??nschte Farbe auf der Moodle-Website zu erzeugen.';
$string['linkcolor'] = 'Link-Farbe';
$string['linkcolordesc'] = 'Die Farbe der Links. Sie k??nnen auch hier die Hauptfarbe Ihres Themes verwenden, aber einige helle Farben sind mit dieser Einstellung m??glicherweise schwer zu lesen. In diesem Fall k??nnen Sie hier eine dunklere Farbe w??hlen.';
$string['mainhovercolor'] = 'Theme Hover Farbe';
$string['mainhovercolordesc'] = 'Farbe f??r Hover-Effekte - dies wird f??r Links, Men??s usw. verwendet.';
$string['def_buttoncolor'] = 'Standard-Button';
$string['def_buttoncolordesc'] = 'Farbe f??r die in Moodle verwendete Standardschaltfl??che';
$string['def_buttonhovercolor'] = 'Standard Button (Hover)';
$string['def_buttonhovercolordesc'] = 'Farbe f??r den Hover-Effekt auf der Standardschaltfl??che';
$string['headercolor'] = 'Header-Farbe';
$string['headercolor_desc'] = 'Farbe f??r den Kopfbereich';
$string['menufirstlevelcolor'] = 'Men?? 1. Level';
$string['menufirstlevelcolordesc'] = 'Farbe f??r die Navigationsleiste';
$string['menufirstlevel_linkcolor'] = 'Men?? 1. Level - Links';
$string['menufirstlevel_linkcolordesc'] = 'Farbe f??r die Links in der Navigationsleiste';
$string['menusecondlevelcolor'] = 'Men?? 2. Level';
$string['menusecondlevelcolordesc'] = 'Farbe f??r das Dropdown-Men?? in der Navigationsleiste';
$string['menusecondlevel_linkcolor'] = 'Men?? 2. Level - Links';
$string['menusecondlevel_linkcolordesc'] = 'Farbe f??r die Links im Dropdown-Men??';
$string['footercolor'] = 'Footer Background Color';
$string['footercolordesc'] = 'Set what color the background of the footer box should be';
$string['footerheadingcolor'] = 'Farbe der Fu??zeilen-??berschriften';
$string['footerheadingcolordesc'] = 'Legen Sie die Farbe f??r Block??berschriften in der Fu??zeile fest';
$string['footertextcolor'] = 'Farbe des Fu??zeilentextes';
$string['footertextcolordesc'] = 'Legen Sie die Farbe fest, in der Ihr Text in der Fu??zeile erscheinen soll';
$string['copyrightcolor'] = 'Fu??zeile Copyright Hintergrundfarbe';
$string['copyrightcolordesc'] = 'Legen Sie fest, welche Farbe der Hintergrund des Copyright-Feldes in der Fu??zeile haben soll';
$string['copyright_textcolor'] = 'Copyright Textfarbe';
$string['copyright_textcolordesc'] = 'Legen Sie die Farbe fest, in der Ihr Text im Copyright-Feld erscheinen soll';

/* Settings - blocks */
$string['settings_blocks'] = 'Moodle Blocks';
$string['block_layout'] = 'Blocklayout w??hlen';
$string['block_layout_opt0'] = 'Standard-Lambda-Block-Layout';
$string['block_layout_opt1'] = 'Standard-Moodle-Block-Layout';
$string['block_layout_opt2'] = 'Zusammenklappbare linke Blockregion';
$string['block_layout_desc'] = 'Sie k??nnen w??hlen zwischen:<br /><ul><li>Standard-Lambda-Blocklayout: beide Blockspalten links und rechts neben dem Hauptinhaltsbereich</li><li>Standard-Moodle-Blocklayout: Blockbereiche links und rechts vom Hauptinhaltsbereich</li><li>Zusammenklappbarer linker Blockbereich: Sie k??nnen eine einklappbare Seitenleiste f??r den linken Blockbereich verwenden: </li></ul><strong>Bitte beachten Sie:</strong>Das Moodle-Dock f??r die Bl??cke kann nur mit dem <em>Standard-Lambda-Blocklayout</em> oder dem <em>Standard-Moodle-Blocklayout</em> verwendet werden.';
$string['sidebar_frontpage'] = 'Klappbare Seitenleiste f??r die Titelseite aktivieren';
$string['sidebar_frontpage_desc'] = 'Wenn Sie die einklappbare Seitenleiste f??r das Blocklayout aus der obigen Dropdown-Liste ausgew??hlt haben, k??nnen Sie w??hlen, ob diese Seitenleiste auch f??r die Moodle-Titelseite aktiviert werden soll oder nicht. Die Titelseite bietet einen zus??tzlichen Blockbereich f??r Admins, so dass die Seitenleiste dort m??glicherweise nicht erforderlich ist.<br /><strong>Bitte beachten Sie: </strong>Wenn Sie ein anderes Blocklayout als die einklappbare Seitenleiste gew??hlt haben, dann hat diese Einstellung keine Auswirkung.';
$string['block_style'] = 'Blockstil w??hlen';
$string['block_style_opt0'] = 'Blockstil 01';
$string['block_style_opt1'] = 'Blockstil 02';
$string['block_style_opt2'] = 'Blockstil 03';
$string['block_style_desc'] = 'Sie k??nnen zwischen den folgenden Blockstilvarianten w??hlen:<div class="row-fluid"><div class="span4"><p><img class="img-responsive img-polaroid" src="https://redpithemes.com/Documentation/assets/img/options-blocks-1.jpg" /><p>Blockstil 01</div><div class="span4"><p><img class="img-responsive img-polaroid" src="https://redpithemes.com/Documentation/assets/img/options-blocks-2.jpg" /><p>Blockstil 02</div><div class="span4"><p><img class="img-responsive img-polaroid" src="https://redpithemes.com/Documentation/assets/img/options-blocks-3.jpg" /><p>Blockstil 03</div></div>';
$string['block_icons'] = 'Theme Lambda Blocksymbole';
$string['block_icons_opt0'] = 'farbig (Standard)';
$string['block_icons_opt1'] = 'monochrom';
$string['block_icons_opt2'] = 'keine (Blocksymbole ausblenden)';
$string['block_icons_desc'] = 'W??hlen Sie einen Stil f??r die Blocksymbole.';

/* Settings - Socials */
$string['settings_socials'] = 'Social Media';
$string['socialsheadingsub'] = 'Begeistern Sie Ihre Benutzer mit Social Networking';
$string['socialsdesc'] = 'Bieten Sie direkte Links zu den wichtigsten sozialen Netzwerken, die Ihre Marke f??rdern.';
$string['facebook'] = 'Facebook URL';
$string['facebookdesc'] = 'Geben Sie die URL Ihrer Facebook-Seite ein. (z.B. https://www.facebook.com/mycollege)';
$string['twitter'] = 'Twitter URL';
$string['twitterdesc'] = 'Geben Sie die URL Ihres Twitter-Feeds ein. (z.B. https://www.twitter.com/mycollege)';
$string['youtube'] = 'YouTube URL';
$string['youtubedesc'] = 'Geben Sie die URL Ihres YouTube-Kanals ein. (z.B. https://www.youtube.com/user/mycollege)';
$string['flickr'] = 'Flickr URL';
$string['flickrdesc'] = 'Geben Sie die URL Ihrer Flickr-Seite ein. (z.B. http://www.flickr.com/photos/mycollege)';
$string['pinterest'] = 'Pinterest URL';
$string['pinterestdesc'] = 'Geben Sie die URL Ihrer Pinterest-Seite ein. (z.B. http://pinterest.com/mycollege/mypinboard)';
$string['instagram'] = 'Instagram URL';
$string['instagramdesc'] = 'Geben Sie die URL Ihrer Instagram-Seite ein. (z.B. http://instagram.com/mycollege)';
$string['linkedin'] = 'LinkedIn URL';
$string['linkedindesc'] = 'Geben Sie die URL Ihrer LinkedIn-Seite ein. (z.B. http://www.linkedin.com/company/mycollege)';
$string['chat'] = 'Chat URL';
$string['chatdesc'] = 'Geben Sie die URL f??r eine Chat-Anwendung ein.';
$string['socials_phone'] = 'Telefonnummer';
$string['socials_phone_desc'] = 'Geben Sie eine Telefonnummer ein, die als Kontakt angezeigt werden soll.';
$string['website'] = 'Website URL';
$string['websitedesc'] = 'Geben Sie die URL Ihrer eigenen Website ein. (z.B. https://www.mycollege.com)';
$string['socials_mail'] = 'Email-Adresse';
$string['socials_mail_desc'] = 'Geben Sie den Hyperlink-Code f??r die HTML-E-Mail-Adresse ein. (z.B. info@mycollege.com)';
$string['socials_color'] = 'Social Icons Farbe';
$string['socials_color_desc'] = 'Legen Sie die Farbe f??r Ihre Social Media-Symbole fest.';
$string['socials_position'] = 'Icons Position';
$string['socials_position_desc'] = 'W??hlen Sie, wo die Social-Media-Symbole platziert werden sollen: unten auf der Seite (Fu??zeile) oder oben (Kopfzeile).';
$string['socials_header_bg'] = 'Social Icons Header Background';
$string['socials_header_bg_desc'] = 'Hier k??nnen Sie ausw??hlen, wie Sie die Hintergrundfarbe f??r die Social Icons in der Kopfzeile trennen m??chten.';
$string['socials_header_bg_0'] = 'vollst??ndig transparent (Kopfzeilenhintergrund verwenden)';
$string['socials_header_bg_1'] = 'leicht gedimmt';
$string['socials_header_bg_2'] = 'verdunkelt';
$string['socials_header_bg_3'] = 'Farbe des Hauptthemes verwenden';
$string['socials_header_bg_4'] = 'Fu??zeile Copyright-Hintergrund verwenden';

/* Settings - Fonts */
$string['settings_fonts'] = 'Fonts';
$string['fontselect_heading'] = 'Schriftartauswahl - ??berschriften';
$string['fontselectdesc_heading'] = 'W??hlen Sie aus der Liste der verf??gbaren Schriftarten.';
$string['fontselect_body'] = 'Schriftartauswahl - Body';
$string['fontselectdesc_body'] = 'W??hlen Sie aus der Liste der verf??gbaren Schriftarten.';
$string['font_body_size'] = 'Body Textgr????e';
$string['font_body_size_desc'] = 'Passen Sie die globale Schriftgr????e f??r den Flie??text an.';
$string['font_languages'] = 'Zus??tzliche Zeichens??tze';
$string['font_languages_desc'] = 'Einige der Schriftarten im Google-Schriftartenverzeichnis unterst??tzen zus??tzliche Zeichens??tze f??r verschiedene Sprachen. Die Verwendung vieler Zeichens??tze kann Ihr Moodle verlangsamen. W??hlen Sie daher nur die Zeichens??tze aus, die Sie tats??chlich ben??tigen.<br /><strong>Bitte beachten Sie: </strong>Das Google-Schriftartenverzeichnis stellt nicht f??r jede Schriftart jeden zus??tzlichen Zeichensatz zur Verf??gung. Im Zweifelsfall sollten Sie <i>Open Sans</i> w??hlen.';
$string['font_languages_latinext'] = 'Latein Erweitert';
$string['font_languages_cyrillic'] = 'Kyrillisch';
$string['font_languages_cyrillicext'] = 'Kyrillisch Erweitert';
$string['font_languages_greek'] = 'Griechisch';
$string['font_languages_greekext'] = 'Griechisch Erweitert';
$string['use_fa5'] = 'Font Awesome 5';
$string['use_fa5_desc'] = 'Verwenden Sie die neuen Font Awesome 6 Web Font Icons.<br /><strong>Bitte beachten Sie:</strong> Wenn Sie bereits Inhalte mit Font Awesome 4-Icons haben, beachten Sie bitte, dass es einige Unterschiede zu v4 gibt, die Sie bei der Verwendung von v6 beachten m??ssen. Wenn Sie ein Upgrade durchf??hren m??chten, lesen Sie bitte unbedingt das <a href="https://fontawesome.com/docs/web/setup/upgrade/upgrade-from-v4" target="_blank">Upgrade-Tutorial</a>.<br />F??r Neuinstallationen und neue Projekte wird die aktuelle Version 6 empfohlen.';
$string['fonts_source'] = 'Schriftartauswahl';
$string['fonts_source_desc'] = 'W??hlen Sie, ob Sie eine Google-Webschriftart verwenden m??chten oder ob Sie Ihre eigene benutzerdefinierte Schriftartdatei hochladen m??chten.<br /><strong>Bitte beachten Sie:</strong> Sie m??ssen <em>??nderungen speichern</em> zuerst aufrufen, um die neuen Optionen f??r Ihre Wahl anzuzeigen.';
$string['fonts_source_google'] = 'Google Fonts';
$string['fonts_source_file'] = 'Benutzerdefinierte Schriftdatei';
$string['fonts_file_body'] = 'Body Schriftart-Datei';
$string['fonts_file_body_desc'] = 'Laden Sie hier Ihre Body Font-Datei hoch. F??r beste Kompatibilit??t sollten Sie ein True Type oder Web Open Font Format verwenden.';
$string['fonts_file_headings'] = '??berschriften Schriftart-Datei';
$string['fonts_file_headings_desc'] = 'Laden Sie hier Ihre ??berschriften Schriftdatei hoch. F??r beste Kompatibilit??t sollten Sie ein True Type oder Web Open Font Format verwenden.';
$string['font_headings_weight'] = '??berschriften Schriftst??rke';
$string['font_headings_weight_desc'] = 'Sie k??nnen eine geeignete Schriftst??rke f??r Ihre ??berschriftenschrift w??hlen. Definiert von dicken bis d??nnen Zeichen: 700 ist dasselbe wie fett, 400 ist dasselbe wie normal und 300 ist f??r Schriften mit leichteren Zeichen.';

/* Settings - Slider */
$string['settings_slider'] = 'Slideshow';
$string['slideshowheading'] = 'Startseite Slideshow';
$string['slideshowheadingsub'] = 'Dynamische Slideshow f??r die Startseite';
$string['slideshowdesc'] = 'Dadurch wird eine dynamische Slideshow mit bis zu 5 Slides f??r Sie erstellt, um wichtige Elemente Ihrer Website zu promoten.<br /><b>HINWEIS: </b>Sie m??ssen mindestens ein Bild hochladen, damit die Slideshow erscheint. ??berschrift, Bildunterschrift und URL sind optional.';
$string['slideshow_slide1'] = 'Slideshow - Slide 1';
$string['slideshow_slide2'] = 'Slideshow - Slide 2';
$string['slideshow_slide3'] = 'Slideshow - Slide 3';
$string['slideshow_slide4'] = 'Slideshow - Slide 4';
$string['slideshow_slide5'] = 'Slideshow - Slide 5';
$string['slideshow_options'] = 'Slideshow - Optionen';
$string['slidetitle'] = 'Slide ??berschrift';
$string['slidetitledesc'] = 'Geben Sie eine beschreibende ??berschrift f??r Ihren Slide ein.';
$string['slideimage'] = 'Slide Bild';
$string['slideimagedesc'] = 'Laden Sie ein Bild hoch.';
$string['slidecaption'] = 'Slide Bildunterschrift';
$string['slidecaptiondesc'] = 'Geben Sie den Beschriftungstext ein, der f??r das Slide verwendet werden soll.';
$string['slide_url'] = 'Slide URL';
$string['slide_url_desc'] = 'Wenn Sie eine URL eingeben, wird in Ihrem Slide ein "Weiterlesen"-Button angezeigt.';
$string['slideshow_height'] = 'H??he der Slideshow';
$string['slideshow_height_desc'] = 'W??hlen Sie eine H??he f??r die Slideshow, die f??r Desktop-Aufl??sungen verwendet werden soll. Diese H??he wird f??r Tablets und Handys angepasst und verringert.';
$string['slideshow_hide_captions'] = 'Beschriftungen auf mobilen Ger??ten ausblenden';
$string['slideshow_hide_captions_desc'] = 'Wenn Sie f??r die Slideshow eine geringere H??he verwenden oder wenn Sie die Einstellung <em>responsive</em> gew??hlt haben, kann es notwendig sein, die ??berschriften und Bildunterschriften f??r mobile Ger??te auszublenden. Andernfalls passen die Bildunterschriften m??glicherweise nicht auf die angepasste Bildh??he f??r mobile Ger??te.';
$string['slideshowpattern'] = 'Pattern/??berlagerung';
$string['slideshowpatterndesc'] = 'W??hlen Sie ein Pattern als transparente ??berlagerung auf Ihren Bildern';
$string['pattern1'] = 'keine';
$string['pattern2'] = 'gepunktet - schmal';
$string['pattern3'] = 'gepunktet - breit';
$string['pattern4'] = 'Linien - horizontal';
$string['pattern5'] = 'Linien - vertikal';
$string['slideshow_advance'] ='AutoAdvance';
$string['slideshow_advance_desc'] ='W??hlen Sie, ob ein Slide nach einer bestimmten Zeit automatisch vorw??rts bewegt werden soll.';
$string['slideshow_nav'] ='Navigation Hover';
$string['slideshow_nav_desc'] ='Wenn true, werden die Navigationsschaltfl??chen (prev, next und Play/Stopp-Schaltfl??chen) nur im Hover-Status sichtbar sein, wenn false, werden sie immer sichtbar sein.';
$string['slideshow_loader'] ='Slideshow Loader';
$string['slideshow_loader_desc'] ='W??hlen Sie pie, bar, keine (selbst wenn Sie "pie" w??hlen, k??nnen alte Browser wie IE8- es nicht anzeigen... sie werden immer einen Ladebalken anzeigen)';
$string['slideshow_imgfx'] ='Image Effekte';
$string['slideshow_imgfx_desc'] ='W??hlen Sie einen ??bergangseffekt f??r Ihre Bilder:<br /><i>random, simpleFade, curtainTopLeft, curtainTopRight, curtainBottomLeft, curtainBottomRight, curtainSliceLeft, curtainSliceRight, blindCurtainTopLeft, blindCurtainTopRight, blindCurtainBottomLeft, blindCurtainBottomRight, blindCurtainSliceBottom, blindCurtainSliceTop, stampede, mosaic, mosaicReverse, mosaicRandom, mosaicSpiral, mosaicSpiralReverse, topLeftBottomRight, bottomRightTopLeft, bottomLeftTopRight, bottomLeftTopRight, scrollLeft, scrollRight, scrollHorz, scrollBottom, scrollTop</i>';
$string['slideshow_txtfx'] ='Text Effekte';
$string['slideshow_txtfx_desc'] ='W??hlen Sie einen ??bergangseffekt-Text in Ihre Slides aus:<br /><i>moveFromLeft, moveFromRight, moveFromTop, moveFromBottom, fadeIn, fadeFromLeft, fadeFromRight, fadeFromTop, fadeFromBottom</i>';

/* Settings - Carousel */
$string['settings_carousel'] = 'Carousel';
$string['carouselheadingsub'] = 'Einstellungen f??r das Frontpage Carousel';
$string['carouseldesc'] = 'Hier k??nnen Sie einen Karussell-Schieberegler f??r Ihre Frontpage einrichten.<br /><strong>Bitte beachten Sie: </strong>Sie m??ssen mindestens die Bilder hochladen, damit der Schieberegler erscheint. Die Untertitel-Einstellungen werden als Hover-Effekt f??r die Bilder angezeigt und sind optional.';
$string['carousel_position'] = 'Carousel Position';
$string['carousel_positiondesc'] = 'W??hlen Sie eine Position f??r den Karussell-Schieberegler.<br />Sie k??nnen w??hlen, ob der Schieberegler oben oder unten im Inhaltsbereich platziert werden soll.';
$string['carousel_h'] = '??berschrift';
$string['carousel_h_desc'] = 'Eine ??berschrift f??r das Frontpage Carousel.';
$string['carousel_hi'] = '??berschrift-Tag';
$string['carousel_hi_desc'] = 'Definieren Sie Ihre ??berschrift: &lt;h1&gt; definiert die wichtigste ??berschrift. &lt;h6&gt; definiert die am wenigsten wichtige ??berschrift.';
$string['carousel_add_html'] = 'Zus??tzlicher HTML-Inhalt';
$string['carousel_add_html_desc'] = 'Jeglicher Inhalt, den Sie hier eingeben, wird links vom Karussell der Titelseite platziert.<br /><strong>Hinweis: </strong>Sie m??ssen HTML-Formatierungselemente verwenden, um Ihren Text zu formatieren.';
$string['carousel_slides'] = 'Anzahl der Slides';
$string['carousel_slides_desc'] = 'W??hlen Sie die Anzahl der Slides f??r Ihr Karussell.';
$string['carousel_image'] = 'Bild';
$string['carousel_imagedesc'] = 'Laden Sie das Bild hoch, das im Slide erscheinen soll.';
$string['carousel_heading'] = 'Bildunterschrift - ??berschrift';
$string['carousel_heading_desc'] = 'Geben Sie eine ??berschrift f??r Ihr Bild ein - dies erzeugt eine Beschriftung mit einem Hover-Effekt.<br /><strong>Hinweis: </strong>Sie m??ssen mindestens die ??berschrift eingeben, damit die ??berschrift erscheint.';
$string['carousel_caption'] = 'Bildunterschrift - Text';
$string['carousel_caption_desc'] = 'Geben Sie den Beschriftungstext ein, der f??r den Hover-Effekt verwendet werden soll.';
$string['carousel_url'] = 'Bildunterschrift - URL';
$string['carousel_urldesc'] = 'Dadurch wird eine Schaltfl??che f??r Ihre Bildunterschrift mit einem Link zu der eingegebenen URL erstellt.';
$string['carousel_btntext'] = 'Bildunterschrift - Link Text';
$string['carousel_btntextdesc'] = 'Geben Sie einen Linktext f??r die URL ein.';
$string['carousel_color'] = 'Bildunterschrift - Farbe';
$string['carousel_colordesc'] = 'W??hlen Sie eine Farbe f??r die Beschriftung aus.';
$string['carousel_img_dim'] = 'Abmessungen des Karussellbildes';
$string['carousel_img_dim_desc'] = 'Stellen Sie die Breite f??r die Karussellbilder ein.';

/* Settings - Login */
$string['settings_login'] = 'Login und Navigation';
$string['custom_login'] = 'Benutzerdefinierte Login-Seite';
$string['custom_login_desc'] = 'Markieren Sie das Kontrollk??stchen, um eine angepasste Version der Standard-Anmeldeseite von Moodle anzuzeigen.';
$string['mycourses_dropdown'] = 'MeineKurse Dropdown-Men??';
$string['mycourses_dropdown_desc'] = 'Zeigt die eingeschriebenen Kurse f??r einen Benutzer als Dropdown-Eintrag im Benutzerdefinierten Men?? an.';
$string['hide_breadcrumb'] = 'Hide Breadcrumb';
$string['hide_breadcrumb_desc'] = 'Die Moodle-Breadcrumb-Navigation f??r nicht angemeldete und Gastbenutzer ausblenden?';
$string['shadow_effect'] = 'Shadow Effect';
$string['shadow_effect_desc'] = 'Verwenden Sie einen Schatteneffekt f??r die benutzerdefinierte Moodle-Men??leiste und die Slideshow?';
$string['login_link'] = 'Zus??tzlicher Login-Link';
$string['login_link_desc'] = 'Zeigt einen zus??tzlichen Link im Anmeldeformular des Themes an.';
$string['moodle_login_page'] = 'Moodle Login Page';
$string['custom_login_link_url'] = 'Benutzerdefinierter Login-Link URL';
$string['custom_login_link_url_desc'] = 'Hier k??nnen Sie eine benutzerdefinierte URL f??r Ihren zus??tzlichen Link im Anmeldeformular eingeben. Dadurch wird die Einstellung aus der Dropdown-Liste ??berschrieben.';
$string['custom_login_link_txt'] = 'Benutzerdefinierter Login-Link-Text';
$string['custom_login_link_txt_desc'] = 'Hier k??nnen Sie einen benutzerdefinierten Text f??r Ihren zus??tzlichen Link im Anmeldeformular eingeben. Dadurch wird die Einstellung aus der Dropdown-Liste ??berschrieben.';
$string['auth_googleoauth2'] = 'Oauth2';
$string['auth_googleoauth2_desc'] = 'Verwenden Sie das Moodle Oauth2-Authentifizierungs-Plugin anstelle des Standard-Anmeldeformulars?<br /><strong>Bitte beachten Sie: </strong>F??r alle Moodle-Versionen vor 3.3 m??ssen Sie dieses zus??tzliche Plugin zuerst aus dem Moodle-Plugins-Verzeichnis installieren. Dieses Plugin erm??glicht es Ihren Nutzern, sich mit einem Google / Facebook / Github / Linkedin / Windows Live / VK / Battle.net-Konto anzumelden. Wenn sich ein Benutzer zum ersten Mal anmeldet, wird ein neues Konto erstellt.';
$string['home_button'] = 'Home Button';
$string['home_button_desc'] = 'W??hlen Sie aus der Liste der verf??gbaren Texte f??r die Schaltfl??che "Home" (die erste Schaltfl??che im benutzerdefinierten Men??)';
$string['home_button_shortname'] = 'Kurzer Seitenname';
$string['home_button_frontpagedashboard'] = 'Frontpage (f??r nicht angemeldete Benutzer) / Dashboard (f??r eingeloggte Benutzer)';
$string['navbar_search_form'] = 'Suchfeld in der Navigationsleiste';
$string['navbar_search_form_desc'] = 'Hier k??nnen Sie w??hlen, ob das Suchfeld in der Navigationsleiste immer sichtbar, f??r nicht angemeldete Gastbenutzer ausgeblendet oder immer versteckt sein soll.';
$string['navbar_search_form_0'] = 'immer sichtbar';
$string['navbar_search_form_1'] = 'Ausblenden f??r nicht angemeldete Benutzer und Gastbenutzer';
$string['navbar_search_form_2'] = 'immer versteckt';

/* Theme */
$string['visibleadminonly'] ='Bl??cke, die in den Bereich unten verschoben werden, werden nur von Admins gesehen.';
$string['region-side-post'] = 'Rechts';
$string['region-side-pre'] = 'Links';
$string['region-footer-left'] = 'Footer (Links)';
$string['region-footer-middle'] = 'Footer (Mitte)';
$string['region-footer-right'] = 'Footer (Rechts)';
$string['region-hidden-dock'] = 'Vor Benutzern verborgen';
$string['nextsection'] = '';
$string['previoussection'] = '';
$string['backtotop'] = '';
$string['responsive'] = 'responsive';
$string['privacy:metadata:preference:sidebarstat'] = 'Die Pr??ferenz der/des Benutzer(s) f??r das Ein- oder Ausblenden der Navigation im Schubladenmen??.';
$string['privacy_sidebar_closed'] = 'Die aktuelle Einstellung f??r die zusammenklappbare Seitenleiste ist geschlossen.';
$string['privacy_sidebar_open'] = 'Die aktuelle Pr??ferenz f??r die zusammenklappbare Seitenleiste ist offen.';