<?php


class MyConnector
{
    public function connect($type)
    {
        $this->setupConnection($type);
    }

    private function setupConnection() {
        //@todo fix this
    var_dump('test');
    }

    public function save()
    {
        $data = ['test1' => 1, 'test2' => 2, 'test3' => 3, 'test4' => 4, 'test5' => 5];
        $this->sendToDatabase($data);
        $data = ['test1' => 1, 'test2' => 2, 'test3' => 3, 'test4' => 4, 'test5' => 5];
        $this->sendToDatabase($data);
        $data = ['test1' => 1, 'test2' => 2, 'test3' => 3, 'test4' => 4, 'test5' => 5];
        $this->sendToDatabase($data);
        $data = ['test1' => 1, 'test2' => 2, 'test3' => 3, 'test4' => 4, 'test5' => 5];
        $this->sendToDatabase($data);
        $data = ['test1' => 1, 'test2' => 2, 'test3' => 3, 'test4' => 4, 'test5' => 5];
        $this->sendToDatabase($data);
        $data = ['test1' => 1, 'test2' => 2, 'test3' => 3, 'test4' => 4, 'test5' => 5];
        $this->sendToDatabase($data);
        $data = ['test1' => 1, 'test2' => 2, 'test3' => 3, 'test4' => 4, 'test5' => 5];
        $this->sendToDatabase($data);
        $data = ['test1' => 1, 'test2' => 2, 'test3' => 3, 'test4' => 4, 'test5' => 5];
        $this->sendToDatabase($data);
        $data = ['test1' => 1, 'test2' => 2, 'test3' => 3, 'test4' => 4, 'test5' => 5];
        $this->sendToDatabase($data);
    }

    public function update()
    {
        $data = ['test1' => 1, 'test2' => 2, 'test3' => 3, 'test4' => 4, 'test5' => 5];
        $this->sendToDatabase($data);
        $data = ['test1' => 1, 'test2' => 2, 'test3' => 3, 'test4' => 4, 'test5' => 5];
        $this->sendToDatabase($data);
        $data = ['test1' => 1, 'test2' => 2, 'test3' => 3, 'test4' => 4, 'test5' => 5];
        $this->sendToDatabase($data);
        $data = ['test1' => 1, 'test2' => 2, 'test3' => 3, 'test4' => 4, 'test5' => 5];
        $this->sendToDatabase($data);
        $data = ['test1' => 1, 'test2' => 2, 'test3' => 3, 'test4' => 4, 'test5' => 5];
        $this->sendToDatabase($data);
        $data = ['test1' => 1, 'test2' => 2, 'test3' => 3, 'test4' => 4, 'test5' => 5];
        $this->sendToDatabase($data);
        $data = ['test1' => 1, 'test2' => 2, 'test3' => 3, 'test4' => 4, 'test5' => 5];
        $this->sendToDatabase($data);
        $data = ['test1' => 1, 'test2' => 2, 'test3' => 3, 'test4' => 4, 'test5' => 5];
        $this->sendToDatabase($data);
        $data = ['test1' => 1, 'test2' => 2, 'test3' => 3, 'test4' => 4, 'test5' => 5];
        $this->sendToDatabase($data);
    }

    private function sendToDatabase($data)
    {
        echo 'trololooo';
    }
}