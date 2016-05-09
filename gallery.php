<?php
/**
 * Created by PhpStorm.
 * User: codywikman
 * Date: 5/8/16
 * Time: 5:34 PM
 */

?>

<div id="gallery" class="clip spaced scene container-fluid">
    <div id="gallery-list" class=" col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2
    col-sm-10 col-sm-offset-1 col-sm-11 col-sm-offset-1">
        <ul>
            <table id="gallery-set">
                <tr>
                    <?php
                    $gallery = array('');
                    foreach ($gallery as $v) {
                        echo '<td>
            <li>
                <div class="df df-view">
                    <div class="df df-holder">
                        <img class="df df-image" src="assets/' . $v . '"/>
                    </div>
                </div>
            </li>
            </td>
                ';
                    }
                    ?>
                </tr>
                <tr class="image-title">
                    <td colspan="">
                        <p>Choa is hot at least that's what I th</p>
                    </td>
                    <td>
                        <p>Choa</p>
                    </td>
                    <td>
                        <p>Choa</p>
                    </td>
                </tr>


            </table>


        </ul>
    </div>
    <div id="gallery-box" class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2
    col-sm-10 col-sm-offset-1 col-sm-11 col-sm-offset-1">
        <h1>title</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.

        </p>
    </div>
</div>
