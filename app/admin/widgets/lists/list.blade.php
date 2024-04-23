{!! form_open([
    'id' => 'list-form',
    'role' => 'form',
    'method' => 'POST',
]) !!}

@if ($showFilter)
            <button
                type="button"
                class="btn btn-outline-default btn-sm border-none"
                title="@lang('admin::lang.button_filter')"
                data-toggle="list-filter"
                data-target=".list-filter"
            ><i class="fa fa-filter">FILTRES</i></button>

    @endif
    @if ($showSetup)
            <button
                type="button"
                class="btn btn-outline-default btn-sm border-none"
                title="@lang('admin::lang.list.text_setup')"
                data-bs-toggle="modal"
                data-bs-target="#{{ $listId }}-setup-modal"
                data-request="{{ $this->getEventHandler('onLoadSetup') }}"
            ><i class="fa fa-sliders"></i></button>
    @endif

<div
    id="{{ $this->getId() }}"
    class="list-table table-responsive"
>
    <table
        id="{{ $this->getId('table') }}"
        class="table table-hover mb-0 border-bottom"
        data-show-print="true"
    >
        <thead>
        <!-- @if ($showCheckboxes)
            {!! $this->makePartial('lists/list_actions') !!}
        @endif -->
        {!! $this->makePartial('lists/list_head') !!}
        </thead>
        <tbody>
        @if(count($records))
            {!! $this->makePartial('lists/list_body') !!}
        @else
            <tr>
                <td colspan="99" class="text-center">{{ $emptyMessage }}</td>
            </tr>
        @endif
        </tbody>
    </table>
</div>

{!! form_close() !!}

{!! $this->makePartial('lists/list_pagination') !!}

@if ($showSetup)
    {!! $this->makePartial('lists/list_setup') !!}
@endif


