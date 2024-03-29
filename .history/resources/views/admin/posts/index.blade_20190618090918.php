extends('layouts.admin');
@section('content')
<<table mat-table #table [dataSource]="dataSource">
    <ng-container matColumnDef="column">
        <th mat-header-cell *matHeaderCellDef> header </th>
        <td mat-cell *matCellDef="let row"> {{row.column}} </td>
    </ng-container>
    <tr mat-header-row *matHeaderRowDef="['column']"></tr>
    <tr mat-row *matRowDef="let row; columns: ['column'];"></tr>
</table>
@endsection