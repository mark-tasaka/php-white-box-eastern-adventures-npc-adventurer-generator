<?php

function getMaleNames()
{
    $maleNames = array(
        'Yuki',
        'Ren',
        'Hiroki',
        'Kazu',
        'Shun',
        'Kenji',
        'Naoki',
        'Takuya',
        'Kazuki',
        'Shota',
        'Keita',
        'Masa',
        'Taka',
        'Kouki',
        'Hiro',
        'Shinji',
        'Takumi',
        'Yuma',
        'Daiki',
        'Naoya',
        'Kazuya',
        'Yuuki',
        'Tatsuya',
        'Kaito',
        'Yuta',
        'Yu',
        'Daisuke',
        'Yuto',
        'Aki',
        'Yusuke',
        'Sho',
        'Shoji',
        'Shuto',
        'Ryo',
        'Issei',
        'Masaki',
        'Hikaru',
        'Ryota',
        'You',
        'Ko',
        'Taichi',
        'Hayato',
        'Taito',
        'Kenta',
        'Hiroaki',
        'Kazuma',
        'Atsushi',
        'Naoto',
        'Tohru',
        'Haru',
        'Kei',
        'Takahiro',
        'Kyohei',
        'Daichi',
        'Haruki',
        'Kento',
        'Wataru',
        'Junya',
        'Ryosuke',
        'Makoto',
        'Taro',
        'Toshi',
        'Shuhei',
        'Shinya',
        'Yuya',
        'Akira',
        'Yuichiro',
        'Tomohiro',
        'Tomoki',
        'Tomoya',
        'Ari',
        'Genki',
        'Tatsuki',
        'Ryu',
        'Raichi',
        'Ryuki',
        'Areshi',
        'Takaya',
        'Kuma',
        'Kinzo',
        'Hajime',
        'Motoi',
        'Kiyomori',
        'Katsuki',
        'Kotaro',
        'Minato'
    );
    
    $lastElement = sizeof($maleNames);
    
    $random = rand(0, $lastElement-1);
    
    return $maleNames[$random];
}


function getFemaleNames()
{
    $femaleNames = array(
        'Yuka',
        'Kana',
        'Yuki',
        'Yuri',
        'Saki',
        'Yui',
        'Haruka',
        'Shiori',
        'Rina',
        'Ayumi',
        'Natsumi',
        'Mayu',
        'Chihiro',
        'Miho',
        'Minami',
        'Ayaka',
        'Kaori',
        'Aya',
        'Sayaka',
        'Kanako',
        'Miyu',
        'Mai',
        'Erika',
        'Miki',
        'Nana',
        'Risa',
        'Mio',
        'Ayano',
        'Mina',
        'Mari',
        'Rin',
        'Yumi',
        'Mei',
        'Ai',
        'Airi',
        'Saya',
        'Nao',
        'Yuna',
        'Shiho',
        'Aika',
        'Mika',
        'Mao',
        'Aki',
        'Akari',
        'Sakura',
        'Haruna',
        'Natsuki',
        'Misa',
        'Eri',
        'Aoi',
        'Misaki',
        'Hana',
        'Tomoko',
        'Narumi',
        'Rika',
        'Asumi',
        'Kei',
        'Ayana',
        'Satomi',
        'Asuka',
        'Kaho',
        'Mizuki',
        'Moeka',
        'Asami',
        'Megumi',
        'Arisa',
        'Momoko',
        'Haru',
        'Nanako',
        'Nagisa',
        'Rui',
        'Manami',
        'Fuka',
        'Chisato',
        'Tomo',
        'Nanami',
        'Hina',
        'Sae',
        'Akane',
        'Yu',
        'Chiharu',
        'Keiko',
        'Nozomi',
        'Kay',
        'Yoko',
        'Yume',
        'Hiromi',
        'Rei',
        'Mayumi',
        'Maki',
        'Minori',
        'Yukiko',
        'Chie',
        'Eriko',
        'Tomomi'
    );
    
    $lastElement = sizeof($femaleNames);
    
    $random = rand(0, $lastElement-1);
    
    return $femaleNames[$random];
}




function getFamilyNames()
{
    $familyNames = array(
        'Sato',
        'Suzuki',
        'Takahashi',
        'Tanaka',
        'Watanabe',
        'Ito',
        'Yamamoto',
        'Nakamura',
        'Kobayashi',
        'Kato',
        'Yoshida',
        'Yamada',
        'Sasaki',
        'Yamaguchi',
        'Saito',
        'Matsumoto',
        'Inoue',
        'Kimura',
        'Hayashi',
        'Shimizu',
        'Yamazaki',
        'Mori',
        'Abe',
        'Ikeda',
        'Hashimoto',
        'Yamashita',
        'Ishikawa',
        'Nakajima',
        'Maeda',
        'Fujita',
        'Ogawa',
        'Goto',
        'Okada',
        'Hasegawa',
        'Murakami',
        'Kondo',
        'Ishii',
        'Sakamoto',
        'Endo',
        'Aoki',
        'Fujii',
        'Nishimura',
        'Fukuda',
        'Ota',
        'Miura',
        'Fujiwara',
        'Okamoto',
        'Matsuda',
        'Nakagawa',
        'Nakano',
        'Harada',
        'Ono',
        'Tamura',
        'Takeuchi',
        'Kaneko',
        'Wada',
        'Nakayama',
        'Ishida',
        'Ueda',
        'Morita',
        'Hara',
        'Shibata',
        'Sakai',
        'Kudo',
        'Yokoyama',
        'Miyazaki',
        'Miyamoto',
        'Uchida',
        'Takagi',
        'Ando',
        'Taniguchi',
        'Ohno',
        'Maruyama',
        'Imai',
        'Takada',
        'Fujimoto',
        'Takeda',
        'Murata',
        'Ueno',
        'Sugiyama',
        'Masuda',
        'Sugawara',
        'Hirano',
        'Kojima',
        'Otsuka',
        'Chiba',
        'Kubo',
        'Matsui',
        'Iwasaki',
        'Sakurai',
        'Kinoshita',
        'Noguchi',
        'Matsuo',
        'Nomura',
        'Kikuchi',
        'Sano',
        'Onishi',
        'Sugimoto',
        'Arai'
    );
    
    $lastElement = sizeof($familyNames);
    
    $random = rand(0, $lastElement-1);
    
    return $familyNames[$random];
}


function getName($nameOption, $sex)
{
    $name = '';
    
    if($nameOption === '1' && $sex === '(male)')
    {
        $name = getMaleNames() . ' ' . getFamilyNames();
    }
    else if($nameOption === '1' && $sex === '(female)')
    {
        $name = getFemaleNames() . ' ' . getFamilyNames();
    }
    else if($nameOption === '2' && $sex === '(male)')
    {
        $name = getMaleNames();
    }
    else if($nameOption === '2' && $sex === '(female)')
    {
        $name = getFemaleNames();
    }
    
    return $name;
}


?>