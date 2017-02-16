<?php

class FormatXmlTest extends TestCase
{
    /** @test */
    public function it_formats_passed_xml_string()
    {
        $unformatted = file_get_contents(__DIR__ . '/FormatXmlTest/unformatted.xml');
        $expected = file_get_contents(__DIR__ . '/FormatXmlTest/formatted.xml');

        $this->assertEquals($expected, format_xml($unformatted));
    }

    /** @test */
    public function it_throws_an_exception_if_non_xml_string_passed()
    {
        $this->willSeeException(Exception::class, 'String could not be parsed as XML');

        format_xml('Non XML');
    }
}
