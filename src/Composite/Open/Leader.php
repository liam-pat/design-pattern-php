<?php
/**
 * Created by PhpStorm.
 * User: BilYooYam
 * Date: 2019-06-04
 * Time: 18:00
 */

namespace App\Composite\Open;

class Leader extends Employee
{
    public function __construct($name)
    {
        $this->setName($name);
    }

    public function add(Employee $employee)
    {
        $this->employees[$employee->getName()] = $employee;

        return $this;
    }

    public function remove(Employee $employee)
    {
        $key = $employee->getName();

        foreach ($this->employees as $employee) {
            if ($employee->getName() == $key) {
                unset($this->employees[$key]);
            }
        }

        return $this;
    }

    public function display()
    {
        $leader = sprintf("Leader:" . $this->getName() . PHP_EOL);

        foreach ($this->employees as $employee) {
            $leader .= $employee->display();
        }

        return $leader;
    }
}
