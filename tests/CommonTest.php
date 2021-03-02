<?php

namespace Hillpy\HikSDK\Tests;

use PHPUnit\Framework\TestCase;
use Hillpy\HikSDK\Common;

class CommonTest extends TestCase
{
    public function testCommon()
    {
        $rawData = [
            'a' => [
              'default' => 'aa',
              'required' => false,
              'value' => '',
            ],
            'b' => [
              'default' => 'bb',
              'required' => false,
              'value' => [
                  'c' => [
                      'default' => 'cc',
                      'required' => true,
                      'value' => '',
                  ],
                  'c1' => [
                      'default' => 'cc1',
                      'required' => false,
                      'value' => '',
                ],
              ],
            ],
            'd' => [
              'default' => 'dd',
              'required' => true,
              'value' => '',
            ],
            'e' => [
              'default' => '',
              'required' => false,
              'value' => '',
            ],
        ];
        $newData = [
            'a' => 1,
            'b' => [
                'c' => 2,
            ],
        ];
        var_dump(Common::handleParam($rawData, $newData));
        $rawData = [
          [
            'a' => [
              'default' => '',
              'required' => false,
              'value' => '',
            ],
            'b' => [
              'default' => '',
              'required' => false,
              'value' => [
                [
                  'bb' => [
                    'default' => '',
                    'required' => false,
                    'value' => '',
                  ],
                ]
              ],
            ],
            'c' => [
              'default' => 'ccc',
              'required' => true,
              'value' => '',
            ]
          ],
        ];
        $newData = [
          [
            'a' => 1,
            'b' => [
              [
                'bb' => '2-1',
              ],
            ],
          ],
          [
            'a' => 11,
            'b' => '',
            'c' => 33
          ],
          [
            'a' => 111,
            'b' => 222,
            'c' => [
              [
                'cc' => '333-1'
              ]
            ],
          ],
        ];
        var_dump(Common::handleParam($rawData, $newData));
    }
}
