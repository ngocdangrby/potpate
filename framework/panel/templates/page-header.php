<?php if ( ! defined( 'ABSPATH' ) ) {
	exit( 'No direct script access allowed' );
}
/**
 * Template "Header" for 8theme dashboard.
 *
 * @since   6.0.2
 * @version 1.0.1
 */

$theme                = wp_get_theme();
$theme_version        = $version = $theme->get( 'Version' );
$is_activated         = etheme_is_activated();
$is_et_core           = class_exists( 'ETC\App\Controllers\Admin\Import' );
$is_child_theme       = is_child_theme();
$settings             = array();
$xstore_branding_settings = get_option( 'xstore_white_label_branding_settings', array() );

ob_start(); ?>
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     width="300px"
     viewBox="0 0 382.6038818 30" style="enable-background:new 0 0 382.6038818 30;" xml:space="preserve">
            <style type="text/css">
                .st0 {
                    fill: #FFFFFF;
                }

                .st1 {
                    enable-background: new;
                }

                .st2 {
                    opacity: 0.8;
                }
            </style>
    <g id="lato">
        <path class="st0" d="M25.4224033,14.3775072l9.8320942-14.2383194h-3.8288116c-0.1433411,0-0.2702847,0.024569-0.3808575,0.086004
                    c-0.0532112,0.02047-0.102375,0.053237-0.1474133,0.090078C30.75,0.4340158,30.6189575,0.5855537,30.4920139,0.7821057
                    l-6.6543732,9.8812351l-0.6510906,0.9623146c-0.2295856,0.3433647-0.0243073,0.0417557-0.4916496,0.7048759l-0.4749699,0.721386
                    l-0.9498615,1.3255901l10.1556168,15.4094839c0.0573101,0.008173,0.1187458,0.0122719,0.1842556,0.0122719h3.9762516
                    L25.4224033,14.3775072z"/>
        <g class="st1">
            <path class="st0" d="M13.5925827,14.5656862L3.8023758,0.1388132h3.9946237c0.2899289,0,0.5036769,0.0483882,0.641643,0.1447646
                        C8.5764084,0.3803541,8.700778,0.5183204,8.8113508,0.6974766l7.741107,11.8810959
                        c0.0963764-0.2899294,0.2413425-0.6070518,0.4346943-0.9521675l7.3068142-10.8457489
                        c0.12397-0.1931528,0.258337-0.3483149,0.4035015-0.4658861c0.1447639-0.1171713,0.3207226-0.175957,0.5278702-0.175957h3.8290653
                        l-9.8317966,14.2405186l10.1629162,15.4202309H25.411293c-0.3035259,0-0.5414677-0.0791798-0.7138252-0.2379417
                        c-0.1727581-0.1583614-0.3139229-0.3343182-0.4242954-0.5278702l-7.9484577-12.4397602
                        c-0.0965767,0.2899303-0.220747,0.5658627-0.372509,0.8277988L8.2110977,29.0337505
                        c-0.1241693,0.193552-0.2659345,0.3695087-0.4242959,0.5278702c-0.1589613,0.158762-0.3829064,0.2379417-0.6728358,0.2379417
                        H3.3882768L13.5925827,14.5656862z"/>
        </g>
    </g>
    <g>
        <path class="st0" d="M53.7016754,5.0097628c-0.1210938,0.2026367-0.25,0.3544922-0.3847656,0.4560547
                    c-0.1357422,0.1010742-0.3115234,0.1518555-0.5273438,0.1518555c-0.2304688,0-0.4970703-0.1147461-0.8007812-0.3447266
                    c-0.3037109-0.2294922-0.6894531-0.4829102-1.1552734-0.7597656c-0.4667969-0.2768555-1.0273438-0.5302734-1.6826172-0.7602539
                    s-1.4492188-0.3447266-2.3818359-0.3447266c-0.8789062,0-1.65625,0.1186523-2.3310547,0.3549805
                    c-0.6767578,0.2363281-1.2402344,0.5571289-1.6928711,0.9628906c-0.453125,0.4052734-0.7939453,0.8813477-1.0239258,1.4287109
                    s-0.3442383,1.1386719-0.3442383,1.7739258c0,0.8110352,0.1992188,1.4833984,0.5976562,2.0170898
                    s0.9257812,0.9902344,1.581543,1.3681641c0.6552734,0.378418,1.3984375,0.706543,2.2294922,0.9833984
                    s1.6826172,0.5644531,2.5537109,0.8613281c0.8720703,0.2973633,1.7236328,0.6318359,2.5546875,1.003418
                    c0.8310547,0.3720703,1.5742188,0.8413086,2.2294922,1.4086914c0.65625,0.567872,1.1826172,1.2641611,1.5820312,2.0878916
                    c0.3984375,0.824707,0.5976562,1.8383789,0.5976562,3.0410156c0,1.2705078-0.2167969,2.4628906-0.6484375,3.5776367
                    c-0.4326172,1.1152344-1.0644531,2.0849609-1.8955078,2.9091797s-1.8515625,1.4731445-3.0615234,1.9458008
                    c-1.2099609,0.4731445-2.5839844,0.7094727-4.125,0.7094727c-1.8779297,0-3.5913086-0.3408203-5.1386719-1.0234375
                    s-2.8681641-1.6044922-3.9628906-2.7670898l1.1352539-1.8652344c0.1079102-0.1484375,0.2397461-0.2734375,0.3950195-0.375
                    c0.1552734-0.1010742,0.3276367-0.1518555,0.5170898-0.1518555c0.2836914,0,0.6079102,0.1518555,0.9731445,0.4560547
                    c0.3647461,0.3041992,0.8208008,0.6386719,1.3681641,1.003418s1.2094727,0.6992188,1.9868164,1.003418
                    c0.7768555,0.3041992,1.7260742,0.4560547,2.8481445,0.4560547c0.9316406,0,1.7636719-0.1279297,2.4931641-0.3852539
                    c0.7294922-0.2563477,1.3476562-0.6181641,1.8544922-1.0844727c0.5068359-0.4658203,0.8955078-1.0234375,1.1660156-1.6723633
                    c0.2705078-0.6484375,0.4052734-1.3710938,0.4052734-2.1689453c0-0.878418-0.1992188-1.5976562-0.5976562-2.1586914
                    c-0.3994141-0.5605469-0.9228516-1.0302734-1.5712891-1.4091797c-0.6484375-0.3779297-1.3886719-0.6992188-2.2197266-0.9628906
                    c-0.8310547-0.2631836-1.6826172-0.5336914-2.5537109-0.8105478c-0.8720703-0.2768555-1.7236328-0.5981445-2.5546875-0.9628906
                    s-1.5708008-0.8378906-2.2197266-1.4189453c-0.6484375-0.5810547-1.1723633-1.3076172-1.5708008-2.1791992
                    c-0.3989258-0.871582-0.5981445-1.9492188-0.5981445-3.2333984c0-1.0268555,0.1992188-2.0200195,0.5981445-2.9799805
                    c0.3984375-0.9594727,0.9760742-1.8105469,1.7329102-2.5541992c0.7568359-0.7426758,1.6928711-1.3378906,2.8076172-1.7836914
                    c1.1152344-0.4458008,2.3945312-0.6689453,3.8417969-0.6689453c1.6210938,0,3.1015625,0.2568359,4.4394531,0.7705078
                    s2.5058594,1.2568359,3.5068359,2.2294922L53.7016754,5.0097628z"/>
        <path class="st0" d="M80.0942535,0.4687472v3.3041992h-9.3847656v25.7446289h-3.9326172V3.7729464h-9.4267578V0.4687472H80.0942535
                    z"/>
        <path class="st0" d="M109.2241364,15.0034151c0,2.1757822-0.34375,4.1728525-1.0332031,5.9902353
                    s-1.6621094,3.3818359-2.9189453,4.6928711c-1.2568359,1.3105469-2.7675781,2.3276367-4.53125,3.0507812
                    s-3.7128906,1.0844727-5.8476562,1.0844727c-2.1357422,0-4.0820312-0.3613281-5.8388672-1.0844727
                    s-3.2636719-1.7402344-4.5205078-3.0507812c-1.2568359-1.3110352-2.2294922-2.8754883-2.9189453-4.6928711
                    c-0.6884766-1.8173828-1.0332031-3.8144531-1.0332031-5.9902353s0.3447266-4.1723633,1.0332031-5.9902344
                    c0.6894531-1.8173828,1.6621094-3.3852539,2.9189453-4.703125c1.2568359-1.3173828,2.7636719-2.3413086,4.5205078-3.0708008
                    c1.7568359-0.7299805,3.703125-1.0947266,5.8388672-1.0947266c2.1347656,0,4.0839844,0.3647461,5.8476562,1.0947266
                    c1.7636719,0.7294922,3.2744141,1.753418,4.53125,3.0708008c1.2568359,1.3178711,2.2294922,2.8857422,2.9189453,4.703125
                    C108.8803864,10.8310518,109.2241364,12.8276339,109.2241364,15.0034151z M105.1909332,15.0034151
                    c0-1.7836914-0.2431641-3.3852539-0.7304688-4.8041992c-0.4863281-1.4189453-1.1757812-2.6181641-2.0673828-3.5981445
                    s-1.9736328-1.7333984-3.2431641-2.2602539c-1.2705078-0.5273438-2.6894531-0.7905273-4.2568359-0.7905273
                    c-1.5546875,0-2.9667969,0.2631836-4.2373047,0.7905273c-1.2705078,0.5268555-2.3544922,1.2802734-3.2529297,2.2602539
                    c-0.8994141,0.9799805-1.5917969,2.1791992-2.078125,3.5981445s-0.7294922,3.0205078-0.7294922,4.8041992
                    s0.2431641,3.3818369,0.7294922,4.7939463c0.4863281,1.4125977,1.1787109,2.6083984,2.078125,3.5883789
                    c0.8984375,0.9799805,1.9824219,1.7299805,3.2529297,2.25c1.2705078,0.5205078,2.6826172,0.7802734,4.2373047,0.7802734
                    c1.5673828,0,2.9863281-0.2597656,4.2568359-0.7802734c1.2695312-0.5200195,2.3515625-1.2700195,3.2431641-2.25
                    s1.5810547-2.1757812,2.0673828-3.5883789C104.9477692,18.385252,105.1909332,16.7871075,105.1909332,15.0034151z"/>
        <path class="st0" d="M118.9135895,17.3955059v12.1220703h-3.9121094V0.4687472h8.2099609
                    c1.8378906,0,3.4257812,0.1860351,4.7636719,0.5576171s2.4423828,0.9091797,3.3144531,1.6113281
                    c0.8710938,0.703125,1.5166016,1.5507812,1.9355469,2.5444336c0.4189453,0.9931641,0.6289062,2.1049805,0.6289062,3.3344727
                    c0,1.0273438-0.1621094,1.9863281-0.4863281,2.878418c-0.3251953,0.8920898-0.7949219,1.6928711-1.4091797,2.4023438
                    c-0.6152344,0.7094727-1.3652344,1.3144531-2.25,1.8139648c-0.8857422,0.5004892-1.8886719,0.8789072-3.0107422,1.1352549
                    c0.4863281,0.2836914,0.9189453,0.6962891,1.2978516,1.2368164l8.4726562,11.5341797h-3.4863281
                    c-0.7167969,0-1.2431641-0.2768555-1.5810547-0.8310547l-7.5410156-10.3789062
                    c-0.2294922-0.3242188-0.4794922-0.5576172-0.75-0.6992188c-0.2705078-0.1420898-0.6757812-0.2128906-1.2158203-0.2128906
                    H118.9135895z M118.9135895,14.5371065h4.1152344c1.1484375,0,2.1591797-0.1381836,3.0302734-0.4155273
                    c0.8720703-0.2768555,1.6015625-0.6689453,2.1894531-1.1757812s1.0302734-1.1113281,1.328125-1.8144531
                    c0.296875-0.7021484,0.4462891-1.4794922,0.4462891-2.3310547c0-1.7294922-0.5712891-3.0336914-1.7138672-3.9121094
                    c-1.1416016-0.878418-2.8408203-1.3178711-5.0976562-1.3178711h-4.2978516V14.5371065z"/>
        <path class="st0" d="M158.6049957,0.4687472v3.203125h-13.9462891v9.6489258h11.2910156v3.0810556h-11.2910156v9.9130859
                    h13.9462891v3.2026367h-17.8994141V0.4687472H158.6049957z"/>
    </g>
    <g class="st2">
        <path class="st0" d="M194.5533142,24.7578125c0.1337891,0,0.2470703,0.046875,0.3398438,0.1396484l0.8007812,0.8603516
                    c-0.5869141,0.6259766-1.2275391,1.1894531-1.9199219,1.6894531c-0.6943359,0.5-1.4501953,0.9267578-2.2705078,1.2802734
                    s-1.7197266,0.6269531-2.7001953,0.8193359c-0.9794922,0.1933594-2.0566406,0.2900391-3.2294922,0.2900391
                    c-1.9599609,0-3.7568359-0.3427734-5.390625-1.0292969c-1.6328125-0.6865234-3.0332031-1.6601562-4.1992188-2.9199219
                    c-1.1669922-1.2607422-2.0771484-2.7832031-2.7304688-4.5703125c-0.6533203-1.7861328-0.9794922-3.7734375-0.9794922-5.9599609
                    c0-2.1464844,0.3359375-4.1064453,1.0097656-5.8798828c0.6728516-1.7729492,1.6201172-3.2963867,2.8398438-4.5698242
                    s2.6796875-2.2602539,4.3798828-2.9599609c1.7001953-0.7001953,3.5761719-1.050293,5.6298828-1.050293
                    c1.0263672,0,1.9667969,0.0771484,2.8203125,0.2299805c0.8525391,0.1538086,1.6494141,0.3735352,2.3896484,0.6601562
                    s1.4365234,0.6435547,2.0898438,1.0698242c0.6533203,0.4272461,1.2939453,0.9199219,1.9199219,1.4799805l-0.6191406,0.9003906
                    c-0.1074219,0.159668-0.2734375,0.2397461-0.5,0.2397461c-0.1201172,0-0.2734375-0.0698242-0.4599609-0.2099609
                    c-0.1875-0.1401367-0.4238281-0.3129883-0.7109375-0.5200195c-0.2861328-0.206543-0.6328125-0.4331055-1.0390625-0.6801758
                    c-0.4072266-0.246582-0.890625-0.4731445-1.4501953-0.6796875c-0.5605469-0.206543-1.2070312-0.3798828-1.9404297-0.5200195
                    s-1.5664062-0.2099609-2.5-0.2099609c-1.7197266,0-3.2998047,0.296875-4.7402344,0.8896484
                    c-1.4394531,0.59375-2.6796875,1.4404297-3.7197266,2.5400391c-1.0400391,1.1000977-1.8496094,2.4335938-2.4296875,4
                    c-0.5800781,1.5668945-0.8701172,3.3237305-0.8701172,5.2700195c0,2,0.2861328,3.7871094,0.8603516,5.3603516
                    c0.5722656,1.5732422,1.3662109,2.9033203,2.3798828,3.9892578c1.0126953,1.0869141,2.2099609,1.9199219,3.5898438,2.5
                    s2.8759766,0.8701172,4.4902344,0.8701172c1.0126953,0,1.9160156-0.0664062,2.7099609-0.2001953
                    c0.7929688-0.1328125,1.5224609-0.3330078,2.1894531-0.5996094s1.2871094-0.5927734,1.8603516-0.9804688
                    c0.5732422-0.3857422,1.1396484-0.8398438,1.7001953-1.359375c0.0664062-0.0537109,0.1298828-0.0966797,0.1894531-0.1298828
                    C194.4039001,24.7744141,194.4732361,24.7578125,194.5533142,24.7578125z"/>
        <path class="st0" d="M207.1539001,9.2973633c1.4257812,0,2.703125,0.2436523,3.8300781,0.7299805
                    c1.1259766,0.4873047,2.0761719,1.1772461,2.8496094,2.0703125c0.7734375,0.8935547,1.3632812,1.9697266,1.7695312,3.2299805
                    c0.4072266,1.2592773,0.6103516,2.6694336,0.6103516,4.2299805c0,1.5595703-0.203125,2.9667969-0.6103516,4.2197266
                    c-0.40625,1.2539062-0.9960938,2.3271484-1.7695312,3.2197266c-0.7734375,0.8935547-1.7236328,1.5800781-2.8496094,2.0605469
                    c-1.1269531,0.4794922-2.4042969,0.7197266-3.8300781,0.7197266c-1.4267578,0-2.7041016-0.2402344-3.8300781-0.7197266
                    c-1.1269531-0.4804688-2.0800781-1.1669922-2.8603516-2.0605469c-0.7802734-0.8925781-1.3730469-1.9658203-1.7802734-3.2197266
                    c-0.40625-1.2529297-0.609375-2.6601562-0.609375-4.2197266c0-1.5605469,0.203125-2.9707031,0.609375-4.2299805
                    c0.4072266-1.2602539,1-2.3364258,1.7802734-3.2299805c0.7802734-0.8930664,1.7333984-1.5830078,2.8603516-2.0703125
                    C204.4497986,9.5410156,205.7271423,9.2973633,207.1539001,9.2973633z M207.1539001,28.2773438
                    c1.1865234,0,2.2226562-0.203125,3.109375-0.6103516c0.8867188-0.40625,1.6269531-0.9892578,2.2207031-1.75
                    c0.5927734-0.7597656,1.0361328-1.6757812,1.3300781-2.75c0.2929688-1.0732422,0.4394531-2.2763672,0.4394531-3.609375
                    c0-1.3203125-0.1464844-2.5205078-0.4394531-3.6000977c-0.2939453-1.0800781-0.7373047-2.0029297-1.3300781-2.7700195
                    c-0.59375-0.7666016-1.3339844-1.3564453-2.2207031-1.7700195c-0.8867188-0.4130859-1.9228516-0.6201172-3.109375-0.6201172
                    c-1.1875,0-2.2236328,0.2070312-3.1103516,0.6201172c-0.8867188,0.4135742-1.6269531,1.003418-2.2197266,1.7700195
                    c-0.59375,0.7670898-1.0400391,1.6899414-1.3398438,2.7700195c-0.3007812,1.0795898-0.4501953,2.2797852-0.4501953,3.6000977
                    c0,1.3330078,0.1494141,2.5361328,0.4501953,3.609375c0.2998047,1.0742188,0.7460938,1.9902344,1.3398438,2.75
                    c0.5927734,0.7607422,1.3330078,1.34375,2.2197266,1.75C204.9302673,28.0742188,205.9664001,28.2773438,207.1539001,28.2773438z"/>
        <path class="st0" d="M219.6128845,29.5175781V9.6176758h1.0400391c0.3466797,0,0.5458984,0.1669922,0.5996094,0.5l0.1796875,3
                    c0.9072266-1.1464844,1.9638672-2.0703125,3.1708984-2.7700195c1.2060547-0.7001953,2.5498047-1.050293,4.0292969-1.050293
                    c1.09375,0,2.0566406,0.1738281,2.890625,0.5200195c0.8330078,0.347168,1.5224609,0.847168,2.0693359,1.5
                    c0.546875,0.6538086,0.9599609,1.4404297,1.2402344,2.3603516s0.4199219,1.9599609,0.4199219,3.1191406v12.7207031h-1.8994141
                    V16.796875c0-1.8657227-0.4277344-3.3291016-1.2802734-4.3891602c-0.8535156-1.0600586-2.1601562-1.590332-3.9199219-1.590332
                    c-1.3076172,0-2.5205078,0.3369141-3.640625,1.0102539s-2.1201172,1.5966797-3,2.7700195v14.9199219H219.6128845z"/>
        <path class="st0" d="M245.0718689,29.8369141c-1.3466797,0-2.3935547-0.3730469-3.140625-1.1191406
                    c-0.7460938-0.7470703-1.1191406-1.9003906-1.1191406-3.4599609V11.6577148h-2.8603516
                    c-0.1464844,0-0.2666016-0.0400391-0.3603516-0.1201172c-0.0927734-0.0800781-0.1396484-0.1933594-0.1396484-0.3398438v-0.7402344
                    l3.4003906-0.2397461l0.4746094-7.1201172c0.0126953-0.1201172,0.0625-0.2265625,0.1484375-0.3203125
                    c0.0849609-0.0927734,0.2011719-0.1396484,0.3466797-0.1396484h0.8896484v7.6000977h6.2597656v1.4199219h-6.2597656v13.4995117
                    c0,0.546875,0.0703125,1.0166016,0.2099609,1.4101562c0.140625,0.3935547,0.3330078,0.7167969,0.5800781,0.9697266
                    c0.2470703,0.2539062,0.5371094,0.4404297,0.8701172,0.5605469s0.6933594,0.1796875,1.0800781,0.1796875
                    c0.4794922,0,0.8935547-0.0703125,1.2402344-0.2099609s0.6464844-0.2929688,0.8994141-0.4599609
                    c0.2539062-0.1669922,0.4599609-0.3203125,0.6201172-0.4599609s0.2871094-0.2099609,0.3798828-0.2099609
                    c0.1064453,0,0.2138672,0.0664062,0.3203125,0.2001953l0.5195312,0.8398438
                    c-0.5068359,0.5595703-1.1494141,1.0097656-1.9296875,1.3496094S245.9117126,29.8369141,245.0718689,29.8369141z"/>
        <path class="st0" d="M252.3121033,29.5175781V9.6176758h1c0.2265625,0,0.3896484,0.046875,0.4902344,0.1401367
                    c0.0996094,0.0932617,0.15625,0.253418,0.1699219,0.4799805l0.1591797,4.199707
                    c0.640625-1.6132812,1.4931641-2.8764648,2.5605469-3.7900391c1.0664062-0.9130859,2.3798828-1.3701172,3.9394531-1.3701172
                    c0.6005859,0,1.1533203,0.0634766,1.6601562,0.1904297c0.5068359,0.1264648,0.9873047,0.3095703,1.4404297,0.5498047
                    l-0.2597656,1.3198242c-0.0400391,0.2133789-0.1738281,0.3203125-0.4003906,0.3203125
                    c-0.0800781,0-0.1933594-0.0268555-0.3398438-0.0800781c-0.1474609-0.0532227-0.3300781-0.1132812-0.5498047-0.1801758
                    c-0.2207031-0.0664062-0.4902344-0.1264648-0.8105469-0.1796875c-0.3193359-0.0532227-0.6865234-0.0800781-1.0996094-0.0800781
                    c-1.5068359,0-2.7431641,0.4667969-3.7099609,1.3999023c-0.9667969,0.9335938-1.75,2.2797852-2.3505859,4.0395508v12.9404297
                    H252.3121033z"/>
        <path class="st0" d="M274.1714783,9.2973633c1.4257812,0,2.703125,0.2436523,3.8300781,0.7299805
                    c1.1259766,0.4873047,2.0761719,1.1772461,2.8496094,2.0703125c0.7734375,0.8935547,1.3632812,1.9697266,1.7695312,3.2299805
                    c0.4072266,1.2592773,0.6103516,2.6694336,0.6103516,4.2299805c0,1.5595703-0.203125,2.9667969-0.6103516,4.2197266
                    c-0.40625,1.2539062-0.9960938,2.3271484-1.7695312,3.2197266c-0.7734375,0.8935547-1.7236328,1.5800781-2.8496094,2.0605469
                    c-1.1269531,0.4794922-2.4042969,0.7197266-3.8300781,0.7197266c-1.4267578,0-2.7041016-0.2402344-3.8300781-0.7197266
                    c-1.1269531-0.4804688-2.0800781-1.1669922-2.8603516-2.0605469c-0.7802734-0.8925781-1.3730469-1.9658203-1.7802734-3.2197266
                    c-0.40625-1.2529297-0.609375-2.6601562-0.609375-4.2197266c0-1.5605469,0.203125-2.9707031,0.609375-4.2299805
                    c0.4072266-1.2602539,1-2.3364258,1.7802734-3.2299805c0.7802734-0.8930664,1.7333984-1.5830078,2.8603516-2.0703125
                    C271.4673767,9.5410156,272.7447205,9.2973633,274.1714783,9.2973633z M274.1714783,28.2773438
                    c1.1865234,0,2.2226562-0.203125,3.109375-0.6103516c0.8867188-0.40625,1.6269531-0.9892578,2.2207031-1.75
                    c0.5927734-0.7597656,1.0361328-1.6757812,1.3300781-2.75c0.2929688-1.0732422,0.4394531-2.2763672,0.4394531-3.609375
                    c0-1.3203125-0.1464844-2.5205078-0.4394531-3.6000977c-0.2939453-1.0800781-0.7373047-2.0029297-1.3300781-2.7700195
                    c-0.59375-0.7666016-1.3339844-1.3564453-2.2207031-1.7700195c-0.8867188-0.4130859-1.9228516-0.6201172-3.109375-0.6201172
                    c-1.1875,0-2.2236328,0.2070312-3.1103516,0.6201172c-0.8867188,0.4135742-1.6269531,1.003418-2.2197266,1.7700195
                    c-0.59375,0.7670898-1.0400391,1.6899414-1.3398438,2.7700195c-0.3007812,1.0795898-0.4501953,2.2797852-0.4501953,3.6000977
                    c0,1.3330078,0.1494141,2.5361328,0.4501953,3.609375c0.2998047,1.0742188,0.7460938,1.9902344,1.3398438,2.75
                    c0.5927734,0.7607422,1.3330078,1.34375,2.2197266,1.75C271.9478455,28.0742188,272.9839783,28.2773438,274.1714783,28.2773438z"/>
        <path class="st0" d="M289.0904236,0.4174805v29.1000977h-1.9003906V0.4174805H289.0904236z"/>
        <path class="st0" d="M304.2496033,18.1171875v11.4003906h-2.0400391V1.2177734h7.2998047
                    c3.3203125,0,5.8232422,0.7265625,7.5107422,2.1796875c1.6865234,1.4536133,2.5292969,3.5268555,2.5292969,6.2202148
                    c0,1.2397461-0.2294922,2.3798828-0.6894531,3.4199219s-1.1240234,1.9370117-1.9902344,2.6899414
                    c-0.8671875,0.7529297-1.9199219,1.3398438-3.1601562,1.7597656s-2.6396484,0.6298828-4.2001953,0.6298828H304.2496033z
                     M304.2496033,16.4775391h5.2597656c1.2539062,0,2.3730469-0.1728516,3.3603516-0.5200195
                    c0.9863281-0.3466797,1.8232422-0.8266602,2.5097656-1.4399414s1.2138672-1.3364258,1.5800781-2.1699219
                    c0.3671875-0.8330078,0.5498047-1.7431641,0.5498047-2.7299805c0-2.1733398-0.6699219-3.8466797-2.0097656-5.0200195
                    s-3.3369141-1.7602539-5.9902344-1.7602539h-5.2597656V16.4775391z"/>
        <path class="st0" d="M334.4898376,29.5175781c-0.4003906,0-0.6474609-0.1865234-0.7402344-0.5605469l-0.2802734-2.5400391
                    c-0.546875,0.5341797-1.0898438,1.0136719-1.6298828,1.4404297s-1.1035156,0.7871094-1.6904297,1.0800781
                    s-1.2197266,0.5166016-1.8994141,0.6699219c-0.6806641,0.1533203-1.4267578,0.2294922-2.2402344,0.2294922
                    c-0.6796875,0-1.3398438-0.0996094-1.9794922-0.2998047c-0.640625-0.2001953-1.2070312-0.5058594-1.7001953-0.9199219
                    c-0.4941406-0.4130859-0.890625-0.9433594-1.1904297-1.5898438s-0.4501953-1.4228516-0.4501953-2.3300781
                    c0-0.8398438,0.2402344-1.6201172,0.7207031-2.3398438c0.4794922-0.7197266,1.2294922-1.3466797,2.25-1.8798828
                    c1.0195312-0.5332031,2.3330078-0.9599609,3.9394531-1.2802734s3.5371094-0.5068359,5.7900391-0.5595703v-2.0800781
                    c0-1.8398438-0.3964844-3.2568359-1.1894531-4.25c-0.7939453-0.9931641-1.9707031-1.4902344-3.5302734-1.4902344
                    c-0.9599609,0-1.7773438,0.1337891-2.4501953,0.4003906c-0.6738281,0.2666016-1.2431641,0.5595703-1.7099609,0.8798828
                    c-0.4667969,0.3198242-0.8466797,0.6132812-1.1396484,0.8798828c-0.2939453,0.2670898-0.5400391,0.3999023-0.7402344,0.3999023
                    c-0.2666016,0-0.4667969-0.1196289-0.5996094-0.3598633L321.6890564,12.4375
                    c1.0400391-1.0400391,2.1337891-1.8266602,3.2802734-2.3598633s2.4462891-0.800293,3.9003906-0.800293
                    c1.0664062,0,2,0.1704102,2.7998047,0.5102539s1.4628906,0.8266602,1.9902344,1.4599609
                    c0.5263672,0.6333008,0.9228516,1.3999023,1.1894531,2.2998047c0.2666016,0.9003906,0.4003906,1.9038086,0.4003906,3.0102539
                    v12.9599609H334.4898376z M326.4898376,28.4570312c0.7724609,0,1.4824219-0.0830078,2.1298828-0.25
                    c0.6464844-0.1660156,1.2460938-0.3994141,1.7998047-0.6992188c0.5527344-0.3007812,1.0703125-0.6572266,1.5498047-1.0703125
                    c0.4804688-0.4130859,0.953125-0.8603516,1.4199219-1.3398438v-5.1806641
                    c-1.8935547,0.0537109-3.5234375,0.1972656-4.8896484,0.4306641c-1.3671875,0.2333984-2.4931641,0.5498047-3.3798828,0.9492188
                    c-0.8867188,0.4003906-1.5400391,0.8769531-1.9599609,1.4306641s-0.6298828,1.1835938-0.6298828,1.8896484
                    c0,0.6669922,0.109375,1.2431641,0.3291016,1.7304688c0.2207031,0.4863281,0.5107422,0.8867188,0.8701172,1.1992188
                    c0.3603516,0.3134766,0.7802734,0.5439453,1.2607422,0.6904297
                    C325.4693298,28.3837891,325.9693298,28.4570312,326.4898376,28.4570312z"/>
        <path class="st0" d="M339.6499939,29.5175781V9.6176758h1.0400391c0.3466797,0,0.5458984,0.1669922,0.5996094,0.5l0.1796875,3
                    c0.9072266-1.1464844,1.9638672-2.0703125,3.1708984-2.7700195c1.2060547-0.7001953,2.5498047-1.050293,4.0292969-1.050293
                    c1.09375,0,2.0566406,0.1738281,2.890625,0.5200195c0.8330078,0.347168,1.5224609,0.847168,2.0693359,1.5
                    c0.546875,0.6538086,0.9599609,1.4404297,1.2402344,2.3603516s0.4199219,1.9599609,0.4199219,3.1191406v12.7207031h-1.8994141
                    V16.796875c0-1.8657227-0.4277344-3.3291016-1.2802734-4.3891602c-0.8535156-1.0600586-2.1601562-1.590332-3.9199219-1.590332
                    c-1.3076172,0-2.5205078,0.3369141-3.640625,1.0102539s-2.1201172,1.5966797-3,2.7700195v14.9199219H339.6499939z"/>
        <path class="st0" d="M367.1890564,9.2973633c1.1201172,0,2.15625,0.1938477,3.109375,0.5800781
                    c0.953125,0.387207,1.7802734,0.9501953,2.4804688,1.6899414c0.7001953,0.7402344,1.2460938,1.6503906,1.6396484,2.7299805
                    c0.3935547,1.0800781,0.5898438,2.3198242,0.5898438,3.7202148c0,0.2929688-0.0429688,0.4931641-0.1298828,0.5996094
                    c-0.0859375,0.1074219-0.2226562,0.1601562-0.4091797,0.1601562h-14.3603516v0.3798828
                    c0,1.4931641,0.1728516,2.8066406,0.5195312,3.9404297c0.3466797,1.1328125,0.8398438,2.0830078,1.4804688,2.8496094
                    c0.6396484,0.7666016,1.4130859,1.34375,2.3203125,1.7304688c0.90625,0.3867188,1.9199219,0.5800781,3.0390625,0.5800781
                    c1,0,1.8671875-0.1103516,2.6005859-0.3300781c0.7333984-0.2207031,1.3496094-0.4667969,1.8496094-0.7402344
                    s0.8964844-0.5205078,1.1904297-0.7402344c0.2929688-0.2197266,0.5068359-0.3300781,0.6396484-0.3300781
                    c0.1728516,0,0.3066406,0.0673828,0.4003906,0.2001953l0.5195312,0.6396484
                    c-0.3193359,0.4003906-0.7431641,0.7734375-1.2695312,1.1201172c-0.5273438,0.3466797-1.1132812,0.6435547-1.7597656,0.890625
                    c-0.6474609,0.2460938-1.3408203,0.4433594-2.0800781,0.5898438c-0.7402344,0.1464844-1.4833984,0.2197266-2.2304688,0.2197266
                    c-1.3603516,0-2.5996094-0.2373047-3.7197266-0.7099609c-1.1201172-0.4736328-2.0810547-1.1630859-2.8828125-2.0703125
                    c-0.8027344-0.90625-1.4228516-2.0166016-1.8603516-3.3300781c-0.4384766-1.3125-0.6572266-2.8164062-0.6572266-4.5097656
                    c0-1.4267578,0.203125-2.7431641,0.6103516-3.949707c0.40625-1.206543,0.9931641-2.246582,1.7597656-3.1201172
                    c0.7666016-0.8730469,1.7070312-1.5561523,2.8203125-2.0498047C364.5122986,9.5444336,365.7749939,9.2973633,367.1890564,9.2973633
                    z M367.2183533,10.7177734c-1.0253906,0-1.9443359,0.159668-2.7558594,0.4799805
                    c-0.8125,0.3198242-1.5146484,0.7797852-2.1074219,1.3798828c-0.5917969,0.6000977-1.0712891,1.3198242-1.4375,2.1601562
                    c-0.3662109,0.8398438-0.609375,1.7797852-0.7285156,2.8198242h13.0996094c0-1.0664062-0.1464844-2.0229492-0.4394531-2.8701172
                    c-0.2929688-0.8466797-0.7050781-1.5629883-1.2382812-2.1499023c-0.5322266-0.5864258-1.1708984-1.0366211-1.9169922-1.3500977
                    C368.948822,10.8745117,368.1236267,10.7177734,367.2183533,10.7177734z"/>
        <path class="st0" d="M380.9888611,0.4174805v29.1000977h-1.9003906V0.4174805H380.9888611z"/>
    </g>
            </svg>
<?php $settings['logo'] = ob_get_clean();

$settings['available'] = true;

if ( $is_child_theme ) :
	$parent        = wp_get_theme( 'xstore' );
	$theme_version = $parent->version;
endif;
$settings['version'] = 'v.' . esc_html( $theme_version );

if ( count( $xstore_branding_settings ) ) {
	if ( isset( $xstore_branding_settings['control_panel']['logo'] ) && ! empty( $xstore_branding_settings['control_panel']['logo'] ) ) {
		$settings['available'] = false;
		ob_start(); ?>

        <img src="<?php echo esc_url( $xstore_branding_settings['control_panel']['logo'] ); ?>" alt="panel-logo">
		
		<?php $settings['logo'] = ob_get_clean();
	}
	if ( isset($xstore_branding_settings['control_panel']['hide_updates']) && $xstore_branding_settings['control_panel']['hide_updates'] == 'on' ){
		$settings['available'] = false;
    }
	if ( isset( $xstore_branding_settings['control_panel']['theme_version'] ) && ! empty( $xstore_branding_settings['control_panel']['theme_version'] ) ) {
		$settings['version'] = $xstore_branding_settings['control_panel']['theme_version'];
	}
}
$check_update = new ETheme_Version_Check();

?>
<div class="etheme-page-wrapper">
    <div class="et_panel-popup"></div>
    <div class="etheme-page-header flex justify-content-between align-items-center">
        <div class="etheme-logo">
			
			<?php echo '<div class="logo-img">' . $settings['logo'] . '</div>'; ?>

            <span class="theme-version">
                <?php echo '<span>' . $settings['version'] . '</span>'; ?>
            </span>

            <?php if( $settings['available'] && $is_activated && $check_update->is_update_available() ) : ?>
                <div class="et_new-version-available">
                    <a href="<?php echo admin_url( 'admin.php?page=et-panel-changelog' ); ?>" target="_blank">
	                    <span><?php esc_attr_e('New version available', 'xstore'); ?></span>
                    </a>
                </div>
            <?php endif; ?>
        </div>

		<?php if ( ! $is_activated || ! $is_et_core ) : ?>
            <button class="et-button et-button-lg no-transform inline-flex align-items-center et-open-installation-video no-loader"
                    data-text="<?php echo esc_html__( 'Watch now', 'xstore' ); ?>">
                <span class="inline-flex align-items-center"><svg height="1.2em" viewBox="0 -77 512.00213 512"
                                                                  width="1.2em" xmlns="http://www.w3.org/2000/svg"
                                                                  style="margin-right: 10px;"><path
                                d="m501.453125 56.09375c-5.902344-21.933594-23.195313-39.222656-45.125-45.128906-40.066406-10.964844-200.332031-10.964844-200.332031-10.964844s-160.261719 0-200.328125 10.546875c-21.507813 5.902344-39.222657 23.617187-45.125 45.546875-10.542969 40.0625-10.542969 123.148438-10.542969 123.148438s0 83.503906 10.542969 123.148437c5.90625 21.929687 23.195312 39.222656 45.128906 45.128906 40.484375 10.964844 200.328125 10.964844 200.328125 10.964844s160.261719 0 200.328125-10.546875c21.933594-5.902344 39.222656-23.195312 45.128906-45.125 10.542969-40.066406 10.542969-123.148438 10.542969-123.148438s.421875-83.507812-10.546875-123.570312zm0 0"
                                fill="#f00"></path><path
                                d="m204.96875 256 133.269531-76.757812-133.269531-76.757813zm0 0"
                                fill="#fff"></path></svg>How to install XStore</span></button>
		<?php endif; ?>
        <div class="text-center">
			<?php if ( $is_child_theme ) { ?>
                <span class="activate-note"><?php echo esc_html__( 'Child theme', 'xstore' ) . ' v.' . $version; ?></span>
			<?php } ?>
			<?php if ( $is_activated ): ?>
                <span class="activate-note activated"><?php esc_html_e( 'Activated', 'xstore' ); ?>
                    <?php if ( count( $xstore_branding_settings ) < 1) { ?>
                        <span class="activated-info">
                            <h4 class="text-left"><?php echo esc_html__('Your theme is activated!', 'xstore'); ?></h4>
                            <p><?php esc_html_e('Now you have lifetime updates, top-notch 24/7 live support and much more. One standard license is valid only for 1 project (1 live and 1 staging websites of the same project). ', 'xstore'); ?></p>
                        </span>
                    <?php } ?>
                </span>
			<?php else: ?>
                <span class="activate-note"><?php esc_html_e( 'Not activated', 'xstore' ); ?></span>
			<?php endif; ?>
        </div>
    </div>