<div class="candidatos">
    <div class="parcial">
        <div class="info">
            <div class="nome">{{ $tSkill->name }}</div>
            <div class="percentagem-num">{{ $tSkill->percent }}%</div>
        </div>
        <div class="progressBar">
            <div class="percentagem" style="width: {{ $tSkill->percent }}%;"></div>
        </div>
    </div>
</div>
