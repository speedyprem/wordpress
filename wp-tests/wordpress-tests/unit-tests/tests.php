<?php
/**
 * Sample test case.
 */
class SampleTest extends WP_UnitTestCase {

    /**
     * A single example test.
     */
    function test_sample() {
        $this->assertTrue( true );
        $str = "hello";
        $this->assertEquals( $str, 'hello' );

    }
}
