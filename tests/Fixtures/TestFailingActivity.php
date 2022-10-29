<?php

namespace Tests\Fixtures;

use Workflow\Activity;

class TestFailingActivity extends Activity
{
    public function execute()
    {
        if ($this->attempts() === 1) {
            $this->model->toWorkflow()->fail('failed');
        }

        return 'activity';
    }
}