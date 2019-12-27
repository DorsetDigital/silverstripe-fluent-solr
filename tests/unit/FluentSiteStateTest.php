<?php


namespace Firesphere\SolrFluent\Tests;

use Firesphere\SolrFluent\States\FluentSiteState;
use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Dev\SapphireTest;

class FluentSiteStateTest extends SapphireTest
{
    public function testAppliesTo()
    {
        $state = new FluentSiteState();

        $this->assertFalse($state->appliesTo(SiteTree::class));
    }

    public function testIsApplicable()
    {
        $state = new FluentSiteState();

        $this->assertFalse($state->stateIsApplicable('en_US'));
    }

    public function testCurrentState()
    {
        $state = new FluentSiteState();

        $this->assertNull($state->activateState('en_US'));

        $this->assertEquals('en_US', $state->currentState());
    }

    public function testDefaultState()
    {
        $state = new FluentSiteState();

        $this->assertNull($state->setDefaultState('en_US'));
    }
}
