<?php

namespace Controller;

class IDOR
{
    public static function account($arg)
    {
        $user_id = $arg[1];
        $accounts = json_decode(
            '[{"username":"zoeyp5","email":"zoey.peltier10@hogwards.com","tel":"555 256 7446"},{"username":"johna1","email":"john.anderson42@hogwards.com","tel":"555 232 7569"},{"username":"zoeyw1","email":"zoey.walker20@hogwards.com","tel":"555 389 9902"},{"username":"samanthaw5","email":"samantha.walker31@hogwards.com","tel":"555 444 1063"},{"username":"johnw3","email":"john.walker90@hogwards.com","tel":"555 674 4151"},{"username":"ethant8","email":"ethan.thompson83@hogwards.com","tel":"555 410 1600"},{"username":"saraha4","email":"sarah.anderson96@hogwards.com","tel":"555 529 4273"},{"username":"michellew4","email":"michelle.walker30@hogwards.com","tel":"555 352 3505"},{"username":"christopherp4","email":"christopher.peltier18@hogwards.com","tel":"555 576 9707"},{"username":"ryana6","email":"ryan.anderson32@hogwards.com","tel":"555 479 8484"},{"username":"johnc6","email":"john.cunningham52@hogwards.com","tel":"555 206 4610"},{"username":"michellec3","email":"lord.voldemort@hogwsrts.com","tel":"555 396 3434"},{"username":"immortal","email":"lord.voldemort@hogwards.com","tel":"911 119 2059"},{"username":"zoeyj6","email":"zoey.johnson87@hogwards.com","tel":"555 258 3969"},{"username":"christophert9","email":"christopher.thompson44@hogwards.com","tel":"555 475 1620"},{"username":"christopherw3","email":"christopher.walker86@hogwards.com","tel":"555 650 8070"},{"username":"christophera7","email":"christopher.anderson28@hogwards.com","tel":"555 412 1643"},{"username":"sarahs2","email":"sarah.simpson51@hogwards.com","tel":"555 332 2201"},{"username":"ethanp9","email":"ethan.peltier75@hogwards.com","tel":"555 693 5116"},{"username":"samanthat3","email":"samantha.tremblay70@hogwards.com","tel":"555 547 1600"},{"username":"michellej2","email":"michelle.johnson69@hogwards.com","tel":"555 485 1661"},{"username":"sarahj7","email":"sarah.johnson58@hogwards.com","tel":"555 416 8286"},{"username":"zoeys8","email":"zoey.simpson83@hogwards.com","tel":"555 677 5534"},{"username":"samanthaa8","email":"samantha.anderson64@hogwards.com","tel":"555 259 2820"},{"username":"sarahp5","email":"sarah.peltier55@hogwards.com","tel":"555 637 1755"},{"username":"sarahc4","email":"sarah.cunningham10@hogwards.com","tel":"555 609 9836"},{"username":"ryant8","email":"ryan.thompson79@hogwards.com","tel":"555 536 9436"},{"username":"zoeya7","email":"zoey.anderson43@hogwards.com","tel":"555 603 8962"},{"username":"christopherj5","email":"christopher.johnson23@hogwards.com","tel":"555 502 2182"},{"username":"ryans2","email":"ryan.simpson23@hogwards.com","tel":"555 385 6795"},{"username":"ethanj2","email":"ethan.johnson26@hogwards.com","tel":"555 568 6926"},{"username":"zoeyc8","email":"zoey.cunningham35@hogwards.com","tel":"555 348 5899"},{"username":"ryanp8","email":"ryan.peltier63@hogwards.com","tel":"555 609 3604"},{"username":"ryanw4","email":"ryan.walker73@hogwards.com","tel":"555 698 4316"},{"username":"michellep6","email":"michelle.peltier35@hogwards.com","tel":"555 481 7712"},{"username":"christopherc5","email":"christopher.cunningham83@hogwards.com","tel":"555 436 5507"},{"username":"johnt7","email":"john.thompson77@hogwards.com","tel":"555 666 5248"},{"username":"johnt3","email":"john.tremblay31@hogwards.com","tel":"555 650 2582"},{"username":"samanthat3","email":"samantha.thompson13@hogwards.com","tel":"555 399 9993"},{"username":"ethanc7","email":"ethan.cunningham54@hogwards.com","tel":"555 418 9251"},{"username":"michellet4","email":"michelle.thompson31@hogwards.com","tel":"555 287 5921"},{"username":"johns6","email":"john.simpson86@hogwards.com","tel":"555 536 8700"},{"username":"christophert9","email":"christopher.tremblay27@hogwards.com","tel":"555 617 8103"},{"username":"zoeyt5","email":"zoey.thompson22@hogwards.com","tel":"555 428 4585"},{"username":"ethanw2","email":"ethan.walker41@hogwards.com","tel":"555 523 6787"},{"username":"ethant5","email":"ethan.tremblay38@hogwards.com","tel":"555 233 5504"},{"username":"ethana8","email":"ethan.anderson32@hogwards.com","tel":"555 689 8041"},{"username":"christophers2","email":"christopher.simpson17@hogwards.com","tel":"555 428 2405"},{"username":"samanthac3","email":"samantha.cunningham82@hogwards.com","tel":"555 504 6024"},{"username":"johnp1","email":"john.peltier78@hogwards.com","tel":"555 208 9493"},{"username":"michellea8","email":"michelle.anderson86@hogwards.com","tel":"555 397 2533"},{"username":"ryant9","email":"ryan.tremblay20@hogwards.com","tel":"555 262 9444"},{"username":"johnj5","email":"john.johnson91@hogwards.com","tel":"555 598 5906"},{"username":"samanthaj2","email":"samantha.johnson74@hogwards.com","tel":"555 366 5218"},{"username":"saraht3","email":"sarah.thompson93@hogwards.com","tel":"555 456 9738"},{"username":"saraht6","email":"sarah.tremblay34@hogwards.com","tel":"555 282 2881"},{"username":"ethans3","email":"ethan.simpson86@hogwards.com","tel":"555 417 7622"},{"username":"sarahw7","email":"sarah.walker27@hogwards.com","tel":"555 265 2078"},{"username":"michellet2","email":"michelle.tremblay55@hogwards.com","tel":"555 589 7180"},{"username":"zoeyt9","email":"zoey.tremblay41@hogwards.com","tel":"555 403 5031"},{"username":"michelles4","email":"michelle.simpson58@hogwards.com","tel":"555 622 3730"},{"username":"ryanj8","email":"ryan.johnson20@hogwards.com","tel":"555 682 4045"},{"username":"samanthap8","email":"samantha.peltier73@hogwards.com","tel":"555 659 6733"},{"username":"samanthas5","email":"samantha.simpson31@hogwards.com","tel":"555 231 1711"}]',
            true
        );
        unset($accounts[0]);
        if (isset($accounts[$user_id])) {
            \Output::success($accounts[$user_id]);
        } else {
            \Output::error("User not found", 404);
        }
    }

    public static function lesson1()
    {
        \View::page("idor/lesson1");
    }
}