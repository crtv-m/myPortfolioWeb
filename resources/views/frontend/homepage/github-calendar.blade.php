<div class="git-calendar">
    <div class="git-calendar__title">GitHub Activity Calendar</div>
    <table>

        <tr>
            @for($week = 0; $week < 52; $week++)
                <td>
                    @for($day = 0; $day < 7; $day++)
                        <div class="graph" data-level="{{ rand(0, 2) }}" title="{{ rand(0, 2) }}"></div>
                    @endfor
                </td>
            @endfor
        </tr>
    </table>
    <div class="git-calendar__bar">
        <span>Contributions less</span>
        <div class="git-calendar__legend">
            <div>Less</div>
            <div class="graph" data-level="0"></div>
            <div class="graph" data-level="1"></div>
            <div class="graph" data-level="2"></div>
            <div class="graph" data-level="3"></div>
            <div class="graph" data-level="4"></div>
            <div>More</div>
        </div>
    </div>
</div>
