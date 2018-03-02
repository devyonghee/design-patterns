<?php

class HomeTheaterFacade
{
    private $amp;
    private $tuner;
    private $dvd;
    private $cd;
    private $projector;
    private $lights;
    private $screen;
    private $popper;

    public function HomeTheaterFacade($amp, $tuner, $dvd, $cd, $projector, $lights, $screen, $popper)
    {
        $this->amp = $amp;
        $this->tuner = $tuner;
        $this->dvd = $dvd;
        $this->cd = $cd;
        $this->projector = $projector;
        $this->lights = $lights;
        $this->screen = $screen;
        $this->popper = $popper;
    }

    public function watchMovie($movie)
    {
        echo "Get ready to watch a movie...";
        $this->popper->on();
        $this->popper->pop();
        $this->lights->dim(10);
        $this->screen->down();
        $this->projector->on();
        $this->projector->wideScreenMode();
        $this->amp->on();
        $this->amp->setDvd();
        $this->amp->setSurroundSound();
        $this->amp->setVolume();
        $this->dvd->on();
        $this->dvd->play($movie);
    }

    public function endMovie(){
        echo "Shutting movie theater down...";
        $this->popper->off();
        $this->lights->on();
        $this->screen->up();
        $this->projector->off();
        $this->amp->off();
        $this->dvd->stop();
        $this->dvd->eject();
        $this->dvd->off();
    }

}
