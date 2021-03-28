<?php

use SilverStripe\Dev\SapphireTest;

class SortableListViewTest extends SapphireTest
{
    protected $usesDatabase = false;

    protected $requiredExtensions = [];

    public function TestDevBuild()
    {
        $exitStatus = shell_exec('php framework/cli-script.php dev/build flush=all  > dev/null; echo $?');
        $exitStatus = (int) trim($exitStatus);
        $this->assertSame(0, $exitStatus);
    }
}
