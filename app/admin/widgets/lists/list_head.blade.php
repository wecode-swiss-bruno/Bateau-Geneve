<tr
    class="list-header"
>
    @if ($showDragHandle)
        <th class="list-action" data-field="list-action-drag-handle"></th>
    @endif

    @if ($showCheckboxes)
        <th class="list-action text-nowrap" data-field="list-action-checkboxes">
            <div class="form-check">
                <input
                    type="checkbox" id="{{ 'checkboxAll-'.$listId }}"
                    class="form-check-input" onclick="$('input[name*=\'checked\']').prop('checked', this.checked)"/>
                <label class="form-check-label" for="{{ 'checkboxAll-'.$listId }}">&nbsp;</label>
            </div>
        </th>
    @endif

    @foreach ($columns as $key => $column)
        @if ($column->type == 'button')
            <th class="list-action {{ $column->cssClass }} text-nowrap"  data-field="{{ $column->cssClass}}asfdadsf" data-field="{{ $column->cssClass }}2345235"></th>
        @elseif ($showSorting && $column->sortable)
            <th
            data-field="{{ $column->getName()}}"
                class="list-cell-name-{{ $column->getName() }} list-cell-type-{{ $column->type }} {{ $column->cssClass }} text-nowrap"
                @if ($column->width) style="width: {{ $column->width }}" @endif>
                <a
                    class="sort-col"
                    data-request="{{ $this->getEventHandler('onSort') }}"
                    data-request-form="#list-form"
                    data-request-data="sort_by: '{{ $column->columnName }}'">
                    {{ $this->getHeaderValue($column) }}
                    <i class="fa fa-sort-{{ ($sortColumn == $column->columnName) ? strtoupper($sortDirection).' active' : 'ASC' }}"></i>
                </a>
            </th>
        @else
            <th
                class="list-cell-name-{{ $column->getName() }} list-cell-type-{{ $column->type }} text-nowrap"
                data-field="{{ $column->getName()}}"
                @if ($column->width) style="width: {{ $column->width }}" @endif
            >
                <span>{{ $this->getHeaderValue($column) }}</span>
            </th>
        @endif
    @endforeach

    @if ($showFilter)
        <th class="list-setup" data-field="list-action-filters">
            <button
                type="button"
                class="btn btn-outline-default btn-sm border-none"
                title="@lang('admin::lang.button_filter')"
                data-toggle="list-filter"
                data-target=".list-filter"
            ><i class="fa fa-filter"></i></button>
        </th>
    @endif
    @if ($showSetup)
        <th class="list-setup" data-field="list-action-show-setup">
            <button
                type="button"
                class="btn btn-outline-default btn-sm border-none"
                title="@lang('admin::lang.list.text_setup')"
                data-bs-toggle="modal"
                data-bs-target="#{{ $listId }}-setup-modal"
                data-request="{{ $this->getEventHandler('onLoadSetup') }}"
            ><i class="fa fa-sliders"></i></button>
        </th>
    @endif
</tr>
