<?php

use PHPUnit\Framework\TestCase;
use App\GetLike;

class GetLikeTest extends TestCase
{
    /** @test */
    public function it_tests_when_there_are_no_likes()
    {
        $names = [];
        $expected = 'no one likes this';
        $actual = (new GetLike)->get($names);

        $this->assertEquals($expected, $actual);
    }

    /** @test */
    public function it_tests_when_there_is_one_like()
    {
        $names = ['Peter'];
        $expected = 'Peter likes this';
        $actual = (new GetLike)->get($names);

        $this->assertEquals($expected, $actual);
    }

    /** @test */
    public function it_tests_when_there_are_two_likes()
    {
        $names = ['Peter', 'Jacob'];
        $expected = 'Peter and Jacob like this';
        $actual = (new GetLike)->get($names);

        $this->assertEquals($expected, $actual);
    }

    /** @test */
    public function it_tests_when_there_are_three_likes()
    {
        $names = ['Peter', 'Jacob', 'Alex'];
        $expected = 'Peter, Jacob and Alex like this';
        $actual = (new GetLike)->get($names);

        $this->assertEquals($expected, $actual);
    }

    /** @test */
    public function it_tests_when_there_are_more_than_three_likes()
    {
        $names = ['Peter', 'Jacob', 'Alex', 'Jane'];
        $expected = 'Peter, Jacob and 2 others like this';
        $actual = (new GetLike)->get($names);

        $this->assertEquals($expected, $actual);
    }
}