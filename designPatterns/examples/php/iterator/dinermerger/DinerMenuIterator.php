<?php

class DinerMenuIterator implements Iterator
{
	protected $list = array();
	protected $position = 0;

	public function __construct($list)
	{
		$this->list = $list;
		$this->position = 0;
	}

	public function next()
	{
		$this->position = $this->position + 1;
	}
	public function rewind()
	{
		$this->position = 0;
	}
	public function current()
	{
		return $this->list[$this->position];
	}
	public function valid()
	{
		return isset($this->list[$this->position]);
	}

	public function key()
	{
		return $this->position;
	}

	public function remove()
	{
		if ($this->position <= 0) {
			throw new Exception("You can't remove an item until you've done at least one next()", 404, null);
		}
		if ($this->list[$this->position - 1] != null) {
			for ($i = $this->position - 1; $i < (count($this->list) - 1); $i++) {
				$this->list[$i] = $this->list[$i + 1];
			}
			$this->list[count($this->list) - 1] = null;
		}
	}
}
