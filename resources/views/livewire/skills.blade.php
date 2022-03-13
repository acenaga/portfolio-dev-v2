<div class="home-v-img">
    <div class="container">
        <div class="row section-separator">
            <div class="section-title text-center col-sm-12">
                <!--<h2>Skills</h2>-->
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="mh-skills-inner">
                    <div class="mh-professional-skill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                        <h3>Technical Skills</h3>
                        <div class="each-skills">
                            @foreach ($technical_skills as $tSkill)
                                <x-technical-skills :tSkill="$tSkill"/>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="mh-professional-skills wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                    <h3>Professional Skills</h3>
                    <ul class="mh-professional-progress">
                        @foreach ($professional_skills as $pSkill)
                            <x-professional-skill :pSkill="$pSkill"/>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
