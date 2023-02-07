<tr class="tableRow">
    <td>-</td>
    <td><strong><?= $data->name ?></strong></td>
    <td><?= $data->gst ?></td>
    <td>
    <?= $data->branch ?>
    </td>
    <td><?= $data->owner ?></td>
    <td><?= $data->dist ?></td>
    <td><?= $data->opentime ?></td>
    <td><?= $data->closetime ?></td>
    <td><?= $data->phone ?></td>
    <!-- <td><span class="badge light badge-' . $class . '">' . $status . '</span></td>
    <td><button onClick="toggleStateProduct({event:event,id:' . $productsRow->id . ',currentState:' . $productsRow->disabled . '})" type="button" class="btn light btn-' . $toggleStyle . '">' . $toggle . '</button>
        <button data-toggle="modal" data-target="#editProductModal" onClick="editProductModalData({props:' . $onclickParams . '})" type="button" class="btn light btn-info">Edit</button>
        <button onClick="dltProduct({event:event,id:' . $productsRow->id . '})" type="button" class="btn light btn-danger">Dlt</button>
    </td> -->
</tr>