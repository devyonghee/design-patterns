<?php
interface QuackObservable
{
    public function registerObserver($observer);

    public function notifyObservers();
}
